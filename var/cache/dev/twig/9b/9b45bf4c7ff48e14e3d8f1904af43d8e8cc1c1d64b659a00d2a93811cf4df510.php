<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_99a355d02b9249066b90e2b3c51b3231b33c2da4391e39c6274487ea403d208d extends Twig_Template
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
        $__internal_1a3ae66b1970898572030bbcd1e721b52481d62efb35ed3acb467a82458bbb5c = $this->env->getExtension("native_profiler");
        $__internal_1a3ae66b1970898572030bbcd1e721b52481d62efb35ed3acb467a82458bbb5c->enter($__internal_1a3ae66b1970898572030bbcd1e721b52481d62efb35ed3acb467a82458bbb5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a3ae66b1970898572030bbcd1e721b52481d62efb35ed3acb467a82458bbb5c->leave($__internal_1a3ae66b1970898572030bbcd1e721b52481d62efb35ed3acb467a82458bbb5c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c75ecf6d42d2f4691f98cff0ef114049544ad68f62aec2de626b325c5b4e5f9d = $this->env->getExtension("native_profiler");
        $__internal_c75ecf6d42d2f4691f98cff0ef114049544ad68f62aec2de626b325c5b4e5f9d->enter($__internal_c75ecf6d42d2f4691f98cff0ef114049544ad68f62aec2de626b325c5b4e5f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c75ecf6d42d2f4691f98cff0ef114049544ad68f62aec2de626b325c5b4e5f9d->leave($__internal_c75ecf6d42d2f4691f98cff0ef114049544ad68f62aec2de626b325c5b4e5f9d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1983f0b88e9819109fb105ec6bfbfcf9c94a9259331ae7576ab8919838d7068d = $this->env->getExtension("native_profiler");
        $__internal_1983f0b88e9819109fb105ec6bfbfcf9c94a9259331ae7576ab8919838d7068d->enter($__internal_1983f0b88e9819109fb105ec6bfbfcf9c94a9259331ae7576ab8919838d7068d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1983f0b88e9819109fb105ec6bfbfcf9c94a9259331ae7576ab8919838d7068d->leave($__internal_1983f0b88e9819109fb105ec6bfbfcf9c94a9259331ae7576ab8919838d7068d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_72bac430420f4a17c00464be6dda02ad29158d796d6457d61ca9b489d8986541 = $this->env->getExtension("native_profiler");
        $__internal_72bac430420f4a17c00464be6dda02ad29158d796d6457d61ca9b489d8986541->enter($__internal_72bac430420f4a17c00464be6dda02ad29158d796d6457d61ca9b489d8986541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_72bac430420f4a17c00464be6dda02ad29158d796d6457d61ca9b489d8986541->leave($__internal_72bac430420f4a17c00464be6dda02ad29158d796d6457d61ca9b489d8986541_prof);

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
