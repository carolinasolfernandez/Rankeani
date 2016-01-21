<?php

/* RankingFrontBundle:Participante:index.html.twig */
class __TwigTemplate_d1aef83bdabfd35171bc6f1452e33619b047cff92d4c96c7dfd4ea366c733910 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("RankingFrontBundle::base.html.twig", "RankingFrontBundle:Participante:index.html.twig", 1);
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
        $__internal_c3bf75c7104a668aaf4e49d7df2f14c3cd04d4614bc2bce8731aa827000a0b0f = $this->env->getExtension("native_profiler");
        $__internal_c3bf75c7104a668aaf4e49d7df2f14c3cd04d4614bc2bce8731aa827000a0b0f->enter($__internal_c3bf75c7104a668aaf4e49d7df2f14c3cd04d4614bc2bce8731aa827000a0b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RankingFrontBundle:Participante:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3bf75c7104a668aaf4e49d7df2f14c3cd04d4614bc2bce8731aa827000a0b0f->leave($__internal_c3bf75c7104a668aaf4e49d7df2f14c3cd04d4614bc2bce8731aa827000a0b0f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_176f9649d40c03de4cc8cc28360eb4541190177d463d9254f72a2fe769bd0fd5 = $this->env->getExtension("native_profiler");
        $__internal_176f9649d40c03de4cc8cc28360eb4541190177d463d9254f72a2fe769bd0fd5->enter($__internal_176f9649d40c03de4cc8cc28360eb4541190177d463d9254f72a2fe769bd0fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo "  
    <script>
        \$(document).ready(function() {
            \$(\"#sortable\").sortable({
                update: function(event, ui) {
                    var array = \$(this).sortable('toArray', {attribute: 'value'});
                    \$('#participantesIds').val(array);
                }
            });
            var array = \$(\"#sortable\").sortable('toArray', {attribute: 'value'});
            \$('#participantesIds').val(array);
        })
    </script>
    <style>
        h1 { text-align:center }
        #sortable { list-style-type: none; margin: 0; padding: 0; width:30%; margin:auto; margin-top:20px; border:2px solid #CCC; cursor:pointer; }
        #sortable li { padding:10px; }
        #sortable li span { position: absolute; margin-left: -1.3em; }
    </style>
    <h1>Rankeani</h1>
    <form action=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("participante_update");
        echo "\" method=\"POST\">
        <ul id=\"sortable\">
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["participantes"]) ? $context["participantes"] : $this->getContext($context, "participantes")));
        foreach ($context['_seq'] as $context["_key"] => $context["participante"]) {
            // line 26
            echo "                <li class=\"ui-state-default\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["participante"], "getId", array()), "html", null, true);
            echo "\"><span class=\"ui-icon ui-icon-arrowthick-2-n-s\"></span>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["participante"], "getNombre", array()), "html", null, true);
            echo "</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participante'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </ul>
        <input type=\"text\" name=\"usuarioId\">
        <input type=\"hidden\" name=\"participantesIds\" id=\"participantesIds\">
        <input type=\"submit\">
    </form>
";
        
        $__internal_176f9649d40c03de4cc8cc28360eb4541190177d463d9254f72a2fe769bd0fd5->leave($__internal_176f9649d40c03de4cc8cc28360eb4541190177d463d9254f72a2fe769bd0fd5_prof);

    }

    public function getTemplateName()
    {
        return "RankingFrontBundle:Participante:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 28,  70 => 26,  66 => 25,  61 => 23,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'RankingFrontBundle::base.html.twig' %}*/
/* */
/* {% block content %}  */
/*     <script>*/
/*         $(document).ready(function() {*/
/*             $("#sortable").sortable({*/
/*                 update: function(event, ui) {*/
/*                     var array = $(this).sortable('toArray', {attribute: 'value'});*/
/*                     $('#participantesIds').val(array);*/
/*                 }*/
/*             });*/
/*             var array = $("#sortable").sortable('toArray', {attribute: 'value'});*/
/*             $('#participantesIds').val(array);*/
/*         })*/
/*     </script>*/
/*     <style>*/
/*         h1 { text-align:center }*/
/*         #sortable { list-style-type: none; margin: 0; padding: 0; width:30%; margin:auto; margin-top:20px; border:2px solid #CCC; cursor:pointer; }*/
/*         #sortable li { padding:10px; }*/
/*         #sortable li span { position: absolute; margin-left: -1.3em; }*/
/*     </style>*/
/*     <h1>Rankeani</h1>*/
/*     <form action="{{ path('participante_update') }}" method="POST">*/
/*         <ul id="sortable">*/
/*             {% for participante in participantes %}*/
/*                 <li class="ui-state-default" value="{{participante.getId}}"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>{{participante.getNombre}}</li>*/
/*                 {% endfor %}*/
/*         </ul>*/
/*         <input type="text" name="usuarioId">*/
/*         <input type="hidden" name="participantesIds" id="participantesIds">*/
/*         <input type="submit">*/
/*     </form>*/
/* {% endblock %}*/
