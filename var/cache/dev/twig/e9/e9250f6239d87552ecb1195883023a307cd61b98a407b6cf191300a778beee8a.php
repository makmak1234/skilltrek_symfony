<?php

/* BlogBlogBundle:Default:word.html.twig */
class __TwigTemplate_676bbee01fad4bb52007f8da031fd463985455e31162764e16c8b37bd0dbdf76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0edbae1276b37488b55ba57136dc95130b21032ea24e798ea4d371e01a7a0561 = $this->env->getExtension("native_profiler");
        $__internal_0edbae1276b37488b55ba57136dc95130b21032ea24e798ea4d371e01a7a0561->enter($__internal_0edbae1276b37488b55ba57136dc95130b21032ea24e798ea4d371e01a7a0561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBlogBundle:Default:word.html.twig"));

        // line 1
        echo "Word = ";
        echo twig_escape_filter($this->env, (isset($context["word"]) ? $context["word"] : $this->getContext($context, "word")), "html", null, true);
        echo " </br>
Param = ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["param"]) ? $context["param"] : $this->getContext($context, "param")), "html", null, true);
        
        $__internal_0edbae1276b37488b55ba57136dc95130b21032ea24e798ea4d371e01a7a0561->leave($__internal_0edbae1276b37488b55ba57136dc95130b21032ea24e798ea4d371e01a7a0561_prof);

    }

    public function getTemplateName()
    {
        return "BlogBlogBundle:Default:word.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 2,  22 => 1,);
    }
}
/* Word = {{ word }} </br>*/
/* Param = {{ param }}*/
