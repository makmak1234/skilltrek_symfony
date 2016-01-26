<?php

/* BlogBlogBundle:Default:index.html.twig */
class __TwigTemplate_79f83c077f5041f245858f7f09aebf27c889349f07c1df6d1225c19cc50b3c09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "BlogBlogBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0732de6cb333d40468fb495e21fcea49559723d404e99487811daa94d2ee7c78 = $this->env->getExtension("native_profiler");
        $__internal_0732de6cb333d40468fb495e21fcea49559723d404e99487811daa94d2ee7c78->enter($__internal_0732de6cb333d40468fb495e21fcea49559723d404e99487811daa94d2ee7c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBlogBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0732de6cb333d40468fb495e21fcea49559723d404e99487811daa94d2ee7c78->leave($__internal_0732de6cb333d40468fb495e21fcea49559723d404e99487811daa94d2ee7c78_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_718ac416f069b66454b3c5a0872ce576c5b5bed771e614139732d2e180641b28 = $this->env->getExtension("native_profiler");
        $__internal_718ac416f069b66454b3c5a0872ce576c5b5bed771e614139732d2e180641b28->enter($__internal_718ac416f069b66454b3c5a0872ce576c5b5bed771e614139732d2e180641b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 6
            echo "\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_blog_post", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t<h2>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</h2>
\t\t</a>

\t\t<p>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "content", array()), "html", null, true);
            echo "</p>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
";
        
        $__internal_718ac416f069b66454b3c5a0872ce576c5b5bed771e614139732d2e180641b28->leave($__internal_718ac416f069b66454b3c5a0872ce576c5b5bed771e614139732d2e180641b28_prof);

    }

    public function getTemplateName()
    {
        return "BlogBlogBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  58 => 10,  52 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* 	{% for post in posts %}*/
/* 		<a href="{{ path('blog_blog_post', { id: post.id }) }}">*/
/* 			<h2>{{ post.title }}</h2>*/
/* 		</a>*/
/* */
/* 		<p>{{ post.content }}</p>*/
/* 	{% endfor %}*/
/* */
/* {% endblock %}*/
/* */
