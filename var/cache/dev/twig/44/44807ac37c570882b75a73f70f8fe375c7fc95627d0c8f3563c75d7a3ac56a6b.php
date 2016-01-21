<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_257fff4bde8677b42289ee3b689ff613eba2e5e4cc92e1c02c7c4fc15571a53f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e042708718bb59fb2cc4fc0e13bfaf170ec82676a2f53b6edf029d2f398a3db = $this->env->getExtension("native_profiler");
        $__internal_4e042708718bb59fb2cc4fc0e13bfaf170ec82676a2f53b6edf029d2f398a3db->enter($__internal_4e042708718bb59fb2cc4fc0e13bfaf170ec82676a2f53b6edf029d2f398a3db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e042708718bb59fb2cc4fc0e13bfaf170ec82676a2f53b6edf029d2f398a3db->leave($__internal_4e042708718bb59fb2cc4fc0e13bfaf170ec82676a2f53b6edf029d2f398a3db_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a9d9649543f8a8df187abdcf1b0f6c1204ab02cf5cc7f4d1fe9786da935fb100 = $this->env->getExtension("native_profiler");
        $__internal_a9d9649543f8a8df187abdcf1b0f6c1204ab02cf5cc7f4d1fe9786da935fb100->enter($__internal_a9d9649543f8a8df187abdcf1b0f6c1204ab02cf5cc7f4d1fe9786da935fb100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a9d9649543f8a8df187abdcf1b0f6c1204ab02cf5cc7f4d1fe9786da935fb100->leave($__internal_a9d9649543f8a8df187abdcf1b0f6c1204ab02cf5cc7f4d1fe9786da935fb100_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d0df54a51cef3f39afff1dd6bb8dbf7566166a4622466464f5ab7a8dcee7c05 = $this->env->getExtension("native_profiler");
        $__internal_6d0df54a51cef3f39afff1dd6bb8dbf7566166a4622466464f5ab7a8dcee7c05->enter($__internal_6d0df54a51cef3f39afff1dd6bb8dbf7566166a4622466464f5ab7a8dcee7c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6d0df54a51cef3f39afff1dd6bb8dbf7566166a4622466464f5ab7a8dcee7c05->leave($__internal_6d0df54a51cef3f39afff1dd6bb8dbf7566166a4622466464f5ab7a8dcee7c05_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4284bc0cfd6a5dbfe6f21d1612499447f89acfd027874106b26af9ae37a98500 = $this->env->getExtension("native_profiler");
        $__internal_4284bc0cfd6a5dbfe6f21d1612499447f89acfd027874106b26af9ae37a98500->enter($__internal_4284bc0cfd6a5dbfe6f21d1612499447f89acfd027874106b26af9ae37a98500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4284bc0cfd6a5dbfe6f21d1612499447f89acfd027874106b26af9ae37a98500->leave($__internal_4284bc0cfd6a5dbfe6f21d1612499447f89acfd027874106b26af9ae37a98500_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
