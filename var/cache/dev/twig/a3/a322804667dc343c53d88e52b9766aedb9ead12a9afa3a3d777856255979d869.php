<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_42b9433f41cd2f89330202c21cf44795f5d660735d9eb5b70d88f5b77df7c602 extends Twig_Template
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
        $__internal_1ef860c218966a55481074bdccdd6bc83967c8524bdcfe530bf0c532c840a6ee = $this->env->getExtension("native_profiler");
        $__internal_1ef860c218966a55481074bdccdd6bc83967c8524bdcfe530bf0c532c840a6ee->enter($__internal_1ef860c218966a55481074bdccdd6bc83967c8524bdcfe530bf0c532c840a6ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ef860c218966a55481074bdccdd6bc83967c8524bdcfe530bf0c532c840a6ee->leave($__internal_1ef860c218966a55481074bdccdd6bc83967c8524bdcfe530bf0c532c840a6ee_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_839a390045e944cfa19fe25f9b1fddff788924eb69f93f94c6e13d66a661a89a = $this->env->getExtension("native_profiler");
        $__internal_839a390045e944cfa19fe25f9b1fddff788924eb69f93f94c6e13d66a661a89a->enter($__internal_839a390045e944cfa19fe25f9b1fddff788924eb69f93f94c6e13d66a661a89a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_839a390045e944cfa19fe25f9b1fddff788924eb69f93f94c6e13d66a661a89a->leave($__internal_839a390045e944cfa19fe25f9b1fddff788924eb69f93f94c6e13d66a661a89a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_da846df4371cdabaef304159e844daa36485e66bfada84627f5fca62646f21fb = $this->env->getExtension("native_profiler");
        $__internal_da846df4371cdabaef304159e844daa36485e66bfada84627f5fca62646f21fb->enter($__internal_da846df4371cdabaef304159e844daa36485e66bfada84627f5fca62646f21fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_da846df4371cdabaef304159e844daa36485e66bfada84627f5fca62646f21fb->leave($__internal_da846df4371cdabaef304159e844daa36485e66bfada84627f5fca62646f21fb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4ca163df53904c695b2aa16c298f792b03d924d152036569ce806f1410931864 = $this->env->getExtension("native_profiler");
        $__internal_4ca163df53904c695b2aa16c298f792b03d924d152036569ce806f1410931864->enter($__internal_4ca163df53904c695b2aa16c298f792b03d924d152036569ce806f1410931864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4ca163df53904c695b2aa16c298f792b03d924d152036569ce806f1410931864->leave($__internal_4ca163df53904c695b2aa16c298f792b03d924d152036569ce806f1410931864_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
