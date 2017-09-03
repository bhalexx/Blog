<?php

/* admin/tags.twig.html */
class __TwigTemplate_5c2bc9e336fadc1b57c4295e598e4b19bed62a24d77778153f9dabf0362967dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.twig.html", "admin/tags.twig.html", 1);
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
        // line 3
        $context["form"] = $this->loadTemplate("templates/form.twig.html", "admin/tags.twig.html", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "\t<div class=\"row\">
\t\t<div class=\"col-xs-12\">
\t\t\t<a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin\" class=\"btn btn-default\">
\t\t\t\t<span class=\"fa fa-tachometer\"></span> Dashboard
\t\t\t</a>
\t\t\t<h2>Tags (";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : null), "html", null, true);
        echo ")</h2>
\t\t\t<p>
\t\t\t\tRetrouvez ci-dessous la liste des tags du blog.
\t\t\t</p>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-xs-12\">
\t\t\t<a href=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/tags/add\" class=\"btn btn-primary\">
\t\t\t\t<span class=\"fa fa-plus-circle\"></span> Ajouter
\t\t\t</a>
\t\t\t
\t\t\t";
        // line 23
        if (twig_test_empty((isset($context["tags"]) ? $context["tags"] : null))) {
            // line 24
            echo "\t\t\t\t<p class=\"h3 text-center\">Aucun tag enregistré pour le moment.</p>
\t\t\t";
        }
        // line 26
        echo "\t\t\t
\t\t\t";
        // line 27
        if ( !twig_test_empty((isset($context["tags"]) ? $context["tags"] : null))) {
            // line 28
            echo "\t\t\t\t<table class=\"table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t\t<th class=\"text-center\">Nombre d'articles</th>
\t\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 38
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "label", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"text-center\">";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "nb_blogposts", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"options\">
\t\t\t\t\t\t\t\t<a href=\"";
                // line 42
                echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
                echo "admin/tags/edit/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-warning\">
\t\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil\"></span> Modifier
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<form method=\"POST\" action=\"";
                // line 45
                echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
                echo "admin/tags/delete/\">
\t\t\t\t\t\t\t\t\t";
                // line 46
                echo $context["form"]->gethiddenInput("id", $this->getAttribute($context["tag"], "id", array()));
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 47
                echo $context["form"]->gethiddenInput("token", (isset($context["token"]) ? $context["token"] : null));
                echo "
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-danger\">
\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span> Supprimer
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t";
        }
        // line 58
        echo "\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "admin/tags.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 58,  130 => 55,  116 => 47,  112 => 46,  108 => 45,  100 => 42,  95 => 40,  91 => 39,  88 => 38,  84 => 37,  73 => 28,  71 => 27,  68 => 26,  64 => 24,  62 => 23,  55 => 19,  44 => 11,  38 => 8,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
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

{% import 'templates/form.twig.html' as form %}

{% block content %}
\t<div class=\"row\">
\t\t<div class=\"col-xs-12\">
\t\t\t<a href=\"{{ base_url }}admin\" class=\"btn btn-default\">
\t\t\t\t<span class=\"fa fa-tachometer\"></span> Dashboard
\t\t\t</a>
\t\t\t<h2>Tags ({{ count }})</h2>
\t\t\t<p>
\t\t\t\tRetrouvez ci-dessous la liste des tags du blog.
\t\t\t</p>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-xs-12\">
\t\t\t<a href=\"{{ base_url }}admin/tags/add\" class=\"btn btn-primary\">
\t\t\t\t<span class=\"fa fa-plus-circle\"></span> Ajouter
\t\t\t</a>
\t\t\t
\t\t\t{% if tags is empty %}
\t\t\t\t<p class=\"h3 text-center\">Aucun tag enregistré pour le moment.</p>
\t\t\t{% endif %}
\t\t\t
\t\t\t{% if tags is not empty %}
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t\t<th class=\"text-center\">Nombre d'articles</th>
\t\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% for tag in tags %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>{{ tag.label }}</td>
\t\t\t\t\t\t\t<td class=\"text-center\">{{ tag.nb_blogposts }}</td>
\t\t\t\t\t\t\t<td class=\"options\">
\t\t\t\t\t\t\t\t<a href=\"{{ base_url }}admin/tags/edit/{{ tag.id }}\" class=\"btn btn-warning\">
\t\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil\"></span> Modifier
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<form method=\"POST\" action=\"{{ base_url }}admin/tags/delete/\">
\t\t\t\t\t\t\t\t\t{{ form.hiddenInput('id', tag.id) }}
\t\t\t\t\t\t\t\t\t{{ form.hiddenInput('token', token) }}
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-danger\">
\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span> Supprimer
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t{% endif %}
\t\t</div>
\t</div>
{% endblock %}", "admin/tags.twig.html", "C:\\wamp64\\www\\oc\\parcours\\blog\\app\\view\\admin\\tags.twig.html");
    }
}
