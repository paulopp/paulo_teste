<?php

    namespace AppBundle\Controller;

    use Doctrine\DBAL\DBALException;
    use Doctrine\ORM\ORMException;
    use Exception;
    use ArcaSolutionsTeste\AppBundle\Entity\Empresa;
    use ArcaSolutionsTeste\AppBundle\Exception\EmpresaException;
    use ArcaSolutionsTeste\AppBundle\Form\Type\EmpresaType;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
    use Symfony\Component\Form\Form;
    use Symfony\Component\HttpFoundation\RedirectResponse;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;

    /**
     * @Route("/empresa")
     */
    class EmpresaController extends Controller
    {
        const ROUTER_PREFIX = 'arcateste_frontend_empresa_';

        /**
         * Landing page.
         *
         * @Route("")
         * @Method({"GET"})
         * 
         * @return Response
         */
        public function listAction()
        {
            $repo = $this->getDoctrine()->getRepository('ArcaSolutionsTesteAppBundle:Empresa');

            return $this->getFormView('list', ['empresaArray' => $repo->findAll()]);
        }

        /**
         * Create page.
         *
         * @Route("/create")
         * @Method({"GET"})
         * 
         * @return Response
         */
        public function createAction()
        {
            $form = $this->getForm(
                new Empresa(),
                'POST',
                $this->generateUrl(self::ROUTER_PREFIX . 'create')
            );

            return $this->getFormView('create', ['form' => $form->createView()]);
        }

        /**
         * Creates processing.
         *
         * @param Request $request
         *
         * @Route("/create")
         * @Method({"POST"})
         *
         * @return RedirectResponse|Response
         * @throws EmpresaException
         */
        public function createProcessAction(Request $request)
        {
            if ($request->getMethod() != 'POST') {
                throw new EmpresaException('Empresa: somente POST é permitido.');
            }

            $form = $this->getForm(
                new Empresa(),
                'POST',
                $this->generateUrl(self::ROUTER_PREFIX . 'create')
            );
            $form->handleRequest($request);

            if (!$form->isSubmitted()) {
                throw new EmpresaException('Empresa: dados não foram submetidos.');
            }

            if ($form->isValid() !== true) {
                return $this->getFormView('create', ['form' => $form->createView()]);
            }

            try {
                $data = $form->getData();

                $empresa = new Empresa();
                $empresa->setTitulo($data->getTitulo);
                $empresa->setTelefone($data->getTelefone());
                $empresa->setEndereco($data->getEndereco);
                $empresa->setCep($data->getCep);
                $empresa->setCidade($data->getCidade);
                $empresa->setEstado($data->getEstado);
                $empresa->setDesricao($data->getDescricao());

                $em = $this->getDoctrine()->getManager();
                $em->persist($empresa);
                $em->flush();
            } catch (DBALException $e) {
                $message = sprintf('DBALException [%i]: %s', $e->getCode(), $e->getMessage());
            } catch (ORMException $e) {
                $message = sprintf('ORMException [%i]: %s', $e->getCode(), $e->getMessage());
            } catch (Exception $e) {
                $message = sprintf('Exception [%i]: %s', $e->getCode(), $e->getMessage());
            }

            if (isset($message)) {
                throw new EmpresaException($message);
            }

            return $this->redirect($this->generateUrl(self::ROUTER_PREFIX . 'list'));
        }

        /**
         * Update page.
         *
         * @Route("/update/{id}", requirements={"id"="\d+"})
         * @Method({"GET"})
         */
        public function updateAction($id)
        {
            $repo = $this->getDoctrine()->getRepository('ArcaSolutionsTesteAppBundle:Empresa');
            $empresa = $repo->findOneById($id);
            if (!$empresa instanceof Empresa) {
                throw new EmpresaException(sprintf('Empresa: empresa [%i] não localizada.', $id));
            }

            $form = $this->getForm(
                $empresa,
                'PATCH',
                $this->generateUrl(self::ROUTER_PREFIX . 'updateprocess', ['id' => $id])
            );

            return $this->getFormView(
                'update',
                [
                    'form' => $form->createView(),
                    'id' => $empresa->getId()
                ]
            );
        }

        /**
         * Update processing.
         *
         * @param Request $request
         * @param int     $id
         *
         * @Route("/update/{id}", requirements={"id"="\d+"})
         * @Method({"PATCH"})
         *
         * @return RedirectResponse|Response
         * @throws EmpresaException
         */
        public function updateProcessAction(Request $request, $id)
        {
            if ($request->getMethod() != 'PATCH') {
                throw new EmpresaException('Empresa: somente o método PATCH é permitido.');
            }

            $repo = $this->getDoctrine()->getRepository('ArcaSolutionsTesteAppBundle:Empresa');
            $empresa = $repo->findOneById($id);
            if (!$empresa instanceof Empresa) {
                throw new EmpresaException(sprintf('Empresa: empresa [%i] não localizada.', $id));
            }

            $form = $this->getForm(
                $empresa,
                'PATCH',
                $this->generateUrl(self::ROUTER_PREFIX . 'updateprocess', ['id' => $id])
            );
            $form->handleRequest($request);

            if (!$form->isSubmitted()) {
                throw new EmpresaException('Empresa: formulario não submetido.');
            }

            if ($form->isValid() !== true) {
                return $this->getFormView('update', ['form' => $form->createView()]);
            }

            try {
                $data = $form->getData();

                $empresa->setTitulo($data->getTitulo);
                $empresa->setTelefone($data->getTelefone());
                $empresa->setEndereco($data->getEndereco);
                $empresa->setCep($data->getCep);
                $empresa->setCidade($data->getCidade);
                $empresa->setEstado($data->getEstado);
                $empresa->setDesricao($data->getDescricao());
                $em = $this->getDoctrine()->getManager();
                $em->flush();
            } catch (DBALException $e) {
                $message = sprintf('DBALException [%i]: %s', $e->getCode(), $e->getMessage());
            } catch (ORMException $e) {
                $message = sprintf('ORMException [%i]: %s', $e->getCode(), $e->getMessage());
            } catch (Exception $e) {
                $message = sprintf('Exception [%i]: %s', $e->getCode(), $e->getMessage());
            }

            if (isset($message)) {
                throw new EmpresaException($message);
            }

            return $this->redirect($this->generateUrl(self::ROUTER_PREFIX . 'list'));
        }

        /**
         * Fetches empresa.
         * 
         * @param int $id
         * 
         * @Route("/{id}", requirements={"id"="\d+"})
         * @Method({"GET"})
         *
         * @return RedirectResponse|Response
         * @throws EmpresaException
         */
        public function readAction($id)
        {
            try {
                $repo = $this->getDoctrine()->getRepository('ArcaSolutionsTesteAppBundle:Empresa');
                $empresa = $repo->findOneById($id);
                if (!$empresa instanceof Empresa) {
                    throw new EmpresaException(sprintf('Empresa: empresa [%i] não localizada.', $id));
                }

                return $this->getFormView('read', ['empresa' => $empresa]);
            } catch (DBALException $e) {
                $message = sprintf('DBALException [%i]: %s', $e->getCode(), $e->getMessage());
            } catch (ORMException $e) {
                $message = sprintf('ORMException [%i]: %s', $e->getCode(), $e->getMessage());
            } catch (Exception $e) {
                $message = sprintf('Exception [%i]: %s', $e->getCode(), $e->getMessage());
            }

            if (isset($message)) {
                throw new EmpresaException($message);
            }

            return $this->redirect($this->generateUrl(self::ROUTER_PREFIX . 'list'));
        }

        /**
         * Deletes empresa.
         *
         * @param int $id
         *
         * @Route("/delete/{id}", requirements={"id"="\d+"})
         * @Method({"GET"})
         *
         * @return RedirectResponse|Response
         * @throws EmpresaException
         */
        public function deleteAction($id)
        {
            try {
                $em = $this->getDoctrine()->getEntityManager();
                $repo = $em->getRepository('ArcaSolutionsTesteAppBundle:Empresa');

                $empresa = $repo->findOneById($id);
                if (!$empresa instanceof Empresa) {
                    throw new EmpresaException(sprintf('Empresa: empresa [%i] não localizado.', $id));
                }

                $em->remove($empresa);
                $em->flush();
            } catch (DBALException $e) {
                $message = sprintf('DBALException [%i]: %s', $e->getCode(), $e->getMessage());
            } catch (ORMException $e) {
                $message = sprintf('ORMException [%i]: %s', $e->getCode(), $e->getMessage());
            } catch (Exception $e) {
                $message = sprintf('Exception [%i]: %s', $e->getCode(), $e->getMessage());
            }

            if (isset($message)) {
                throw new EmpresaException($message);
            }

            return $this->redirect($this->generateUrl(self::ROUTER_PREFIX . 'list'));
        }

        /**
         * Creates form object.
         * 
         * @param Empresa $empresa
         * @param string  $method
         * @param string  $action
         * 
         * @return Form
         */
        private function getForm(Empresa $empresa, $method, $action)
        {
            return $this->createForm(
                new EmpresaType(),
                $empresa,
                [
                    'method' => $method,
                    'action' => $action
                ]
            );
        }

        /**
         * Creates webform.
         * 
         * @param string $template
         * @param array  $parameters
         * 
         * @return Response
         */
        private function getFormView($template, array $parameters = [])
        {
            return $this->render(
                sprintf('ArcaSolutionsTesteAppBundle:Empresa:%s.html.twig', $template),
                $parameters
            );
        }
    }



?>