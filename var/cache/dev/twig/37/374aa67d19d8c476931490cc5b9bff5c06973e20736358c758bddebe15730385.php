<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_26ccac28e93129ff9e6e9e9adb3ed8294de69de07b64920873d38af5a8edd929 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a23f6df03a9934c07a5185086188688d2c8dbd6cf52be7d630dbf7df0f0f98a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a23f6df03a9934c07a5185086188688d2c8dbd6cf52be7d630dbf7df0f0f98a2->enter($__internal_a23f6df03a9934c07a5185086188688d2c8dbd6cf52be7d630dbf7df0f0f98a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_fde5309a51dea15e08a9e1b9101952062af7fb565009a6847f3aaa15b62dfb1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fde5309a51dea15e08a9e1b9101952062af7fb565009a6847f3aaa15b62dfb1f->enter($__internal_fde5309a51dea15e08a9e1b9101952062af7fb565009a6847f3aaa15b62dfb1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a23f6df03a9934c07a5185086188688d2c8dbd6cf52be7d630dbf7df0f0f98a2->leave($__internal_a23f6df03a9934c07a5185086188688d2c8dbd6cf52be7d630dbf7df0f0f98a2_prof);

        
        $__internal_fde5309a51dea15e08a9e1b9101952062af7fb565009a6847f3aaa15b62dfb1f->leave($__internal_fde5309a51dea15e08a9e1b9101952062af7fb565009a6847f3aaa15b62dfb1f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_87bb2fedea5bbda818197b66cb64f7d94e2d4b90c44129ed5d017488e7352969 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87bb2fedea5bbda818197b66cb64f7d94e2d4b90c44129ed5d017488e7352969->enter($__internal_87bb2fedea5bbda818197b66cb64f7d94e2d4b90c44129ed5d017488e7352969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ed8992ef59d0c236d59c38e2d62fe39436accd259f3d565a0f1e7419d1752e26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed8992ef59d0c236d59c38e2d62fe39436accd259f3d565a0f1e7419d1752e26->enter($__internal_ed8992ef59d0c236d59c38e2d62fe39436accd259f3d565a0f1e7419d1752e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ed8992ef59d0c236d59c38e2d62fe39436accd259f3d565a0f1e7419d1752e26->leave($__internal_ed8992ef59d0c236d59c38e2d62fe39436accd259f3d565a0f1e7419d1752e26_prof);

        
        $__internal_87bb2fedea5bbda818197b66cb64f7d94e2d4b90c44129ed5d017488e7352969->leave($__internal_87bb2fedea5bbda818197b66cb64f7d94e2d4b90c44129ed5d017488e7352969_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3d295b0925a258eac21bf5628bac6866389926468cf17b30feac2b3b22b4a460 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d295b0925a258eac21bf5628bac6866389926468cf17b30feac2b3b22b4a460->enter($__internal_3d295b0925a258eac21bf5628bac6866389926468cf17b30feac2b3b22b4a460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f23247dc64e008525a90f865aafe38db61ec8b6c7afc98fa8148c35ceba04f86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f23247dc64e008525a90f865aafe38db61ec8b6c7afc98fa8148c35ceba04f86->enter($__internal_f23247dc64e008525a90f865aafe38db61ec8b6c7afc98fa8148c35ceba04f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f23247dc64e008525a90f865aafe38db61ec8b6c7afc98fa8148c35ceba04f86->leave($__internal_f23247dc64e008525a90f865aafe38db61ec8b6c7afc98fa8148c35ceba04f86_prof);

        
        $__internal_3d295b0925a258eac21bf5628bac6866389926468cf17b30feac2b3b22b4a460->leave($__internal_3d295b0925a258eac21bf5628bac6866389926468cf17b30feac2b3b22b4a460_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_69e19450281910dc44b43de175d5fba308d8ba02d3b6328e79ae0d156c5f4750 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69e19450281910dc44b43de175d5fba308d8ba02d3b6328e79ae0d156c5f4750->enter($__internal_69e19450281910dc44b43de175d5fba308d8ba02d3b6328e79ae0d156c5f4750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e614294a4098ff25b4cd4dc375cbd1c55858d6924e5cb03b9739f5c2b64fd159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e614294a4098ff25b4cd4dc375cbd1c55858d6924e5cb03b9739f5c2b64fd159->enter($__internal_e614294a4098ff25b4cd4dc375cbd1c55858d6924e5cb03b9739f5c2b64fd159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e614294a4098ff25b4cd4dc375cbd1c55858d6924e5cb03b9739f5c2b64fd159->leave($__internal_e614294a4098ff25b4cd4dc375cbd1c55858d6924e5cb03b9739f5c2b64fd159_prof);

        
        $__internal_69e19450281910dc44b43de175d5fba308d8ba02d3b6328e79ae0d156c5f4750->leave($__internal_69e19450281910dc44b43de175d5fba308d8ba02d3b6328e79ae0d156c5f4750_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/paulo_teste/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
