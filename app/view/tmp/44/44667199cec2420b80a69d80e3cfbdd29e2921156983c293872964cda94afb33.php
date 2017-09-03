<?php

/* admin/dashboard.twig.html */
class __TwigTemplate_49e73246c648c258b38c099883088926f0d06121fa1fe2bc3c200d6ec44d0079 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.twig.html", "admin/dashboard.twig.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.twig.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t<div class=\"row\">
\t\t<div class=\"col-xs-12\">
\t\t\t<h2>Dashboard</h2>
\t\t\t<p>
\t\t\t\tBienvenue sur la console d'administration du blog. Sélectionnez ci-dessous la section qui vous intéresse.
\t\t\t</p>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-lg-4\">
\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<span class=\"h4\">Articles</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\tAjouter, modifier ou supprimer des articles.
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t<a href=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/posts\">Choisir</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-lg-4\">
\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<span class=\"h4\">Commentaires en attente</span>
\t\t\t\t\t<div class=\"badge\">
\t\t\t\t\t\t";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["commentsCount"]) ? $context["commentsCount"] : null), "html", null, true);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\tValider ou supprimer les commentaires en attente.
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t<a href=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/comments\">Choisir</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-lg-4\">
\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<span class=\"h4\">Tags</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\tAjouter, modifier ou supprimer des tags.
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t<a href=\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/tags\">Choisir</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>\t
";
    }

    public function getTemplateName()
    {
        return "admin/dashboard.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 51,  73 => 38,  63 => 31,  51 => 22,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin/layout.twig.html' %}

{% block content %}
\t<div class=\"row\">
\t\t<div class=\"col-xs-12\">
\t\t\t<h2>Dashboard</h2>
\t\t\t<p>
\t\t\t\tBienvenue sur la console d'administration du blog. Sélectionnez ci-dessous la section qui vous intéresse.
\t\t\t</p>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-lg-4\">
\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<span class=\"h4\">Articles</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\tAjouter, modifier ou supprimer des articles.
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t<a href=\"{{ base_url }}admin/posts\">Choisir</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-lg-4\">
\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<span class=\"h4\">Commentaires en attente</span>
\t\t\t\t\t<div class=\"badge\">
\t\t\t\t\t\t{{ commentsCount }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\tValider ou supprimer les commentaires en attente.
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t<a href=\"{{ base_url }}admin/comments\">Choisir</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-lg-4\">
\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<span class=\"h4\">Tags</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\tAjouter, modifier ou supprimer des tags.
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t<a href=\"{{ base_url }}admin/tags\">Choisir</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>\t
{% endblock %}", "admin/dashboard.twig.html", "C:\\wamp64\\www\\oc\\parcours\\blog\\app\\view\\admin\\dashboard.twig.html");
    }
}
