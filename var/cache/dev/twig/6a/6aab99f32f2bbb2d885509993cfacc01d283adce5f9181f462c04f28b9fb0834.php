<?php

/* RankingFrontBundle::base.html.twig */
class __TwigTemplate_881f60206bae581f08f6f8e7e45c1e681540046fea272110633128d367b1ffd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "RankingFrontBundle::base.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e23f4ea1d01f072bc2d714305be779f8f673730b22d3da0659e46303c7f672c = $this->env->getExtension("native_profiler");
        $__internal_8e23f4ea1d01f072bc2d714305be779f8f673730b22d3da0659e46303c7f672c->enter($__internal_8e23f4ea1d01f072bc2d714305be779f8f673730b22d3da0659e46303c7f672c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RankingFrontBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e23f4ea1d01f072bc2d714305be779f8f673730b22d3da0659e46303c7f672c->leave($__internal_8e23f4ea1d01f072bc2d714305be779f8f673730b22d3da0659e46303c7f672c_prof);

    }

    public function getTemplateName()
    {
        return "RankingFrontBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
