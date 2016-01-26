<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f81d869eefd4ccfa492f98b70826d0814853b9e0c631decf210cfdffe27b9643 extends Twig_Template
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
        $__internal_9057e6ec6a364b3f28edc9918a415134b1b8eaed0301a64a48eb007c4576c1e6 = $this->env->getExtension("native_profiler");
        $__internal_9057e6ec6a364b3f28edc9918a415134b1b8eaed0301a64a48eb007c4576c1e6->enter($__internal_9057e6ec6a364b3f28edc9918a415134b1b8eaed0301a64a48eb007c4576c1e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9057e6ec6a364b3f28edc9918a415134b1b8eaed0301a64a48eb007c4576c1e6->leave($__internal_9057e6ec6a364b3f28edc9918a415134b1b8eaed0301a64a48eb007c4576c1e6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_641513cce37d89733430955d2cda8eca4e5a09dd71d9ff4d43d4ee1b742c7342 = $this->env->getExtension("native_profiler");
        $__internal_641513cce37d89733430955d2cda8eca4e5a09dd71d9ff4d43d4ee1b742c7342->enter($__internal_641513cce37d89733430955d2cda8eca4e5a09dd71d9ff4d43d4ee1b742c7342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_641513cce37d89733430955d2cda8eca4e5a09dd71d9ff4d43d4ee1b742c7342->leave($__internal_641513cce37d89733430955d2cda8eca4e5a09dd71d9ff4d43d4ee1b742c7342_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bc0d64cd4800851dca17cec000216ff736d4ecb44339883aaf6a642d4637a8bc = $this->env->getExtension("native_profiler");
        $__internal_bc0d64cd4800851dca17cec000216ff736d4ecb44339883aaf6a642d4637a8bc->enter($__internal_bc0d64cd4800851dca17cec000216ff736d4ecb44339883aaf6a642d4637a8bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bc0d64cd4800851dca17cec000216ff736d4ecb44339883aaf6a642d4637a8bc->leave($__internal_bc0d64cd4800851dca17cec000216ff736d4ecb44339883aaf6a642d4637a8bc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9ce63ea7adcbf098af03ffbeb197e07bf186e292d5402f723007afabec837884 = $this->env->getExtension("native_profiler");
        $__internal_9ce63ea7adcbf098af03ffbeb197e07bf186e292d5402f723007afabec837884->enter($__internal_9ce63ea7adcbf098af03ffbeb197e07bf186e292d5402f723007afabec837884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9ce63ea7adcbf098af03ffbeb197e07bf186e292d5402f723007afabec837884->leave($__internal_9ce63ea7adcbf098af03ffbeb197e07bf186e292d5402f723007afabec837884_prof);

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
