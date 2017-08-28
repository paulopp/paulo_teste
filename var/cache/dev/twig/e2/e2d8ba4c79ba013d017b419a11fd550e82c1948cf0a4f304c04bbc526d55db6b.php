<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_beb21384708b7fce70142673076643bf4701a2536699ef3f1150a9b33abd0d29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8988e93f3b8aeb9e791120de159f10d8429b8e16919e7e73f04c063729224acc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8988e93f3b8aeb9e791120de159f10d8429b8e16919e7e73f04c063729224acc->enter($__internal_8988e93f3b8aeb9e791120de159f10d8429b8e16919e7e73f04c063729224acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_db7f8e4ca0c2de7ff3ecbe27cfa9c5b14dc85322649f33d180a4ebe86741ee94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db7f8e4ca0c2de7ff3ecbe27cfa9c5b14dc85322649f33d180a4ebe86741ee94->enter($__internal_db7f8e4ca0c2de7ff3ecbe27cfa9c5b14dc85322649f33d180a4ebe86741ee94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_8988e93f3b8aeb9e791120de159f10d8429b8e16919e7e73f04c063729224acc->leave($__internal_8988e93f3b8aeb9e791120de159f10d8429b8e16919e7e73f04c063729224acc_prof);

        
        $__internal_db7f8e4ca0c2de7ff3ecbe27cfa9c5b14dc85322649f33d180a4ebe86741ee94->leave($__internal_db7f8e4ca0c2de7ff3ecbe27cfa9c5b14dc85322649f33d180a4ebe86741ee94_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_01fb5186e7aae17410bc286f90d8d1091f286a63bae6983486488f328cf97119 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01fb5186e7aae17410bc286f90d8d1091f286a63bae6983486488f328cf97119->enter($__internal_01fb5186e7aae17410bc286f90d8d1091f286a63bae6983486488f328cf97119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dc5ebbc568d09e9afd563ce918caaef58a63dcb2ec97a729b0cda03fde141d57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc5ebbc568d09e9afd563ce918caaef58a63dcb2ec97a729b0cda03fde141d57->enter($__internal_dc5ebbc568d09e9afd563ce918caaef58a63dcb2ec97a729b0cda03fde141d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_dc5ebbc568d09e9afd563ce918caaef58a63dcb2ec97a729b0cda03fde141d57->leave($__internal_dc5ebbc568d09e9afd563ce918caaef58a63dcb2ec97a729b0cda03fde141d57_prof);

        
        $__internal_01fb5186e7aae17410bc286f90d8d1091f286a63bae6983486488f328cf97119->leave($__internal_01fb5186e7aae17410bc286f90d8d1091f286a63bae6983486488f328cf97119_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_01e62812a0bdb2824f0914bfa2fecdad142802fb3ee94d192bd7545b4c03a709 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01e62812a0bdb2824f0914bfa2fecdad142802fb3ee94d192bd7545b4c03a709->enter($__internal_01e62812a0bdb2824f0914bfa2fecdad142802fb3ee94d192bd7545b4c03a709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_14bd33dc5bffae3b36aaa83f4b374c45fd7a865439ed5a90720ec08bd3ab785f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14bd33dc5bffae3b36aaa83f4b374c45fd7a865439ed5a90720ec08bd3ab785f->enter($__internal_14bd33dc5bffae3b36aaa83f4b374c45fd7a865439ed5a90720ec08bd3ab785f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_14bd33dc5bffae3b36aaa83f4b374c45fd7a865439ed5a90720ec08bd3ab785f->leave($__internal_14bd33dc5bffae3b36aaa83f4b374c45fd7a865439ed5a90720ec08bd3ab785f_prof);

        
        $__internal_01e62812a0bdb2824f0914bfa2fecdad142802fb3ee94d192bd7545b4c03a709->leave($__internal_01e62812a0bdb2824f0914bfa2fecdad142802fb3ee94d192bd7545b4c03a709_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ae0834ea08fb081b47ff4a86be0f0d9369f1f2b5ef4a2f5f2e1b2c7c97dfc61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ae0834ea08fb081b47ff4a86be0f0d9369f1f2b5ef4a2f5f2e1b2c7c97dfc61->enter($__internal_2ae0834ea08fb081b47ff4a86be0f0d9369f1f2b5ef4a2f5f2e1b2c7c97dfc61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d0ae5a2624ecfb62d9da15f32e56086ca88c6e1d6add8bfe13d1ee110402c41e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0ae5a2624ecfb62d9da15f32e56086ca88c6e1d6add8bfe13d1ee110402c41e->enter($__internal_d0ae5a2624ecfb62d9da15f32e56086ca88c6e1d6add8bfe13d1ee110402c41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d0ae5a2624ecfb62d9da15f32e56086ca88c6e1d6add8bfe13d1ee110402c41e->leave($__internal_d0ae5a2624ecfb62d9da15f32e56086ca88c6e1d6add8bfe13d1ee110402c41e_prof);

        
        $__internal_2ae0834ea08fb081b47ff4a86be0f0d9369f1f2b5ef4a2f5f2e1b2c7c97dfc61->leave($__internal_2ae0834ea08fb081b47ff4a86be0f0d9369f1f2b5ef4a2f5f2e1b2c7c97dfc61_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/paulo_teste/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
