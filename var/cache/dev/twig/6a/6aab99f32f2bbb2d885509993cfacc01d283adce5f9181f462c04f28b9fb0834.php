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
        $__internal_296c9284f171d02d8ca836f5692c04051734d1ce619ba9b511712c5becc55354 = $this->env->getExtension("native_profiler");
        $__internal_296c9284f171d02d8ca836f5692c04051734d1ce619ba9b511712c5becc55354->enter($__internal_296c9284f171d02d8ca836f5692c04051734d1ce619ba9b511712c5becc55354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RankingFrontBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_296c9284f171d02d8ca836f5692c04051734d1ce619ba9b511712c5becc55354->leave($__internal_296c9284f171d02d8ca836f5692c04051734d1ce619ba9b511712c5becc55354_prof);

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
