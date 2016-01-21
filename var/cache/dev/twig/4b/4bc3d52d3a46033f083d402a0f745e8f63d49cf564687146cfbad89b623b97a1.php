<?php

/* RankingFrontBundle:Default:index.html.twig */
class __TwigTemplate_366af8229ca56f8a7db1b4941495766550b6ab181778ac2f1a101531e75e8900 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("RankingFrontBundle::base.html.twig", "RankingFrontBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "RankingFrontBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2bc69a75e63dc4bc94188f41df66db16b8cf580b97316c4ae64d4f7a0d9a0314 = $this->env->getExtension("native_profiler");
        $__internal_2bc69a75e63dc4bc94188f41df66db16b8cf580b97316c4ae64d4f7a0d9a0314->enter($__internal_2bc69a75e63dc4bc94188f41df66db16b8cf580b97316c4ae64d4f7a0d9a0314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RankingFrontBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bc69a75e63dc4bc94188f41df66db16b8cf580b97316c4ae64d4f7a0d9a0314->leave($__internal_2bc69a75e63dc4bc94188f41df66db16b8cf580b97316c4ae64d4f7a0d9a0314_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_d03985441e134fdbb463fd3e3cdecea20163d42807f1528138105b12358b540d = $this->env->getExtension("native_profiler");
        $__internal_d03985441e134fdbb463fd3e3cdecea20163d42807f1528138105b12358b540d->enter($__internal_d03985441e134fdbb463fd3e3cdecea20163d42807f1528138105b12358b540d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo "  
    <script>
        \$(function() {
            \$(\"#sortable\").sortable();
            \$(\"#sortable\").disableSelection();
        });
    </script>
    <style>
        h1 { text-align:center }
        #sortable { list-style-type: none; margin: 0; padding: 0; width:30%; margin:auto; margin-top:20px; border:2px solid #CCC; }
        #sortable li { padding:10px; }
        #sortable li span { position: absolute; margin-left: -1.3em; }
    </style>
    <h1>Rankeani</h1>
    <ul id=\"sortable\">
        <li class=\"ui-state-default\"><span class=\"ui-icon ui-icon-arrowthick-2-n-s\"></span>Ombligo</li>
        <li class=\"ui-state-default\"><span class=\"ui-icon ui-icon-arrowthick-2-n-s\"></span>Humo</li>
        <li class=\"ui-state-default\"><span class=\"ui-icon ui-icon-arrowthick-2-n-s\"></span>Champion</li>
        <li class=\"ui-state-default\"><span class=\"ui-icon ui-icon-arrowthick-2-n-s\"></span>Jefa</li>
        <li class=\"ui-state-default\"><span class=\"ui-icon ui-icon-arrowthick-2-n-s\"></span>Cara de Mariano</li>
        <li class=\"ui-state-default\"><span class=\"ui-icon ui-icon-arrowthick-2-n-s\"></span>La wachi</li>
        <li class=\"ui-state-default\"><span class=\"ui-icon ui-icon-arrowthick-2-n-s\"></span>La novia de Aldano</li>
        <li class=\"ui-state-default\"><span class=\"ui-icon ui-icon-arrowthick-2-n-s\"></span>La cocinera</li>
        <li class=\"ui-state-default\"><span class=\"ui-icon ui-icon-arrowthick-2-n-s\"></span>Capo</li>
    </ul>
";
        
        $__internal_d03985441e134fdbb463fd3e3cdecea20163d42807f1528138105b12358b540d->leave($__internal_d03985441e134fdbb463fd3e3cdecea20163d42807f1528138105b12358b540d_prof);

    }

    public function getTemplateName()
    {
        return "RankingFrontBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 3,  11 => 1,);
    }
}
/* {% extends 'RankingFrontBundle::base.html.twig' %}*/
/* */
/* {% block content %}  */
/*     <script>*/
/*         $(function() {*/
/*             $("#sortable").sortable();*/
/*             $("#sortable").disableSelection();*/
/*         });*/
/*     </script>*/
/*     <style>*/
/*         h1 { text-align:center }*/
/*         #sortable { list-style-type: none; margin: 0; padding: 0; width:30%; margin:auto; margin-top:20px; border:2px solid #CCC; }*/
/*         #sortable li { padding:10px; }*/
/*         #sortable li span { position: absolute; margin-left: -1.3em; }*/
/*     </style>*/
/*     <h1>Rankeani</h1>*/
/*     <ul id="sortable">*/
/*         <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Ombligo</li>*/
/*         <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Humo</li>*/
/*         <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Champion</li>*/
/*         <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Jefa</li>*/
/*         <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Cara de Mariano</li>*/
/*         <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>La wachi</li>*/
/*         <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>La novia de Aldano</li>*/
/*         <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>La cocinera</li>*/
/*         <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Capo</li>*/
/*     </ul>*/
/* {% endblock %}*/
