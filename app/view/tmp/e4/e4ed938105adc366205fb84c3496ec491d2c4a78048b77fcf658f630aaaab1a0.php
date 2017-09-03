<?php

/* admin/blogpost.twig.html */
class __TwigTemplate_555a75d1f52f289aeab0248fab2b4ece891c6b43b19b487aafa6e54f5326c28d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.twig.html", "admin/blogpost.twig.html", 1);
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
        $context["form"] = $this->loadTemplate("templates/form.twig.html", "admin/blogpost.twig.html", 3);
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
\t\t\t<h2>Articles (";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : null), "html", null, true);
        echo ")</h2>
\t\t\t<p>
\t\t\t\tRetrouvez ci-dessous la liste des articles du blog.
\t\t\t</p>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-xs-12\">
\t\t\t<a href=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/post/add\" class=\"btn btn-primary\">
\t\t\t\t<span class=\"fa fa-plus-circle\"></span> Ajouter
\t\t\t</a>
\t\t\t
\t\t\t";
        // line 23
        if (twig_test_empty((isset($context["posts"]) ? $context["posts"] : null))) {
            // line 24
            echo "\t\t\t\t<p class=\"h3 text-center\">Oops ! Aucun article n'a encore été publié. Soyez le premier à en écrire un ! :)</p>
\t\t\t";
        }
        // line 26
        echo "\t\t\t
\t\t\t";
        // line 27
        if ( !twig_test_empty((isset($context["posts"]) ? $context["posts"] : null))) {
            // line 28
            echo "\t\t\t\t<table class=\"table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t<th>Titre</th>
\t\t\t\t\t\t\t<th>Auteur</th>
\t\t\t\t\t\t\t<th>Dernière modification</th>
\t\t\t\t\t\t\t<th><span class=\"fa fa-comments-o\" title=\"Commentaires\"></span></th>
\t\t\t\t\t\t\t<th><span class=\"fa fa-heart\" title=\"Likes\"></span></th>
\t\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 43
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                // line 45
                if ($this->getAttribute($context["post"], "visible", array())) {
                    // line 46
                    echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
                    echo "blog/post/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                    echo "\" target=\"_blank\" title=\"Voir l'article\">
\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-external-link\"></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                }
                // line 50
                echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                // line 52
                if ($this->getAttribute($context["post"], "visible", array())) {
                    // line 53
                    echo "\t\t\t\t\t\t\t\t\t<span class=\"fa fa-eye\" title=\"Public\"></span>
\t\t\t\t\t\t\t\t";
                }
                // line 55
                echo "\t\t\t\t\t\t\t\t";
                if ( !$this->getAttribute($context["post"], "visible", array())) {
                    // line 56
                    echo "\t\t\t\t\t\t\t\t\t<span class=\"fa fa-eye-slash\" title=\"Privé\"></span>
\t\t\t\t\t\t\t\t";
                }
                // line 58
                echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "author", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "date_update", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "nb_comments", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "nb_likes", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"options\">
\t\t\t\t\t\t\t\t<a href=\"";
                // line 65
                echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
                echo "admin/post/edit/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-warning\">
\t\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil\"></span> Modifier
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<form method=\"POST\" action=\"";
                // line 68
                echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
                echo "admin/post/delete/\">
\t\t\t\t\t\t\t\t\t";
                // line 69
                echo $context["form"]->gethiddenInput("id", $this->getAttribute($context["post"], "id", array()));
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 70
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t";
        }
        // line 80
        echo "\t\t
\t\t</div>
\t</div>
\t
";
    }

    public function getTemplateName()
    {
        return "admin/blogpost.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 80,  180 => 78,  166 => 70,  162 => 69,  158 => 68,  150 => 65,  145 => 63,  141 => 62,  137 => 61,  133 => 60,  129 => 59,  126 => 58,  122 => 56,  119 => 55,  115 => 53,  113 => 52,  109 => 50,  99 => 46,  97 => 45,  93 => 43,  89 => 42,  73 => 28,  71 => 27,  68 => 26,  64 => 24,  62 => 23,  55 => 19,  44 => 11,  38 => 8,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
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
\t\t\t<h2>Articles ({{ count }})</h2>
\t\t\t<p>
\t\t\t\tRetrouvez ci-dessous la liste des articles du blog.
\t\t\t</p>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-xs-12\">
\t\t\t<a href=\"{{ base_url }}admin/post/add\" class=\"btn btn-primary\">
\t\t\t\t<span class=\"fa fa-plus-circle\"></span> Ajouter
\t\t\t</a>
\t\t\t
\t\t\t{% if posts is empty %}
\t\t\t\t<p class=\"h3 text-center\">Oops ! Aucun article n'a encore été publié. Soyez le premier à en écrire un ! :)</p>
\t\t\t{% endif %}
\t\t\t
\t\t\t{% if posts is not empty %}
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t<th>Titre</th>
\t\t\t\t\t\t\t<th>Auteur</th>
\t\t\t\t\t\t\t<th>Dernière modification</th>
\t\t\t\t\t\t\t<th><span class=\"fa fa-comments-o\" title=\"Commentaires\"></span></th>
\t\t\t\t\t\t\t<th><span class=\"fa fa-heart\" title=\"Likes\"></span></th>
\t\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% for post in posts %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t{% if post.visible %}
\t\t\t\t\t\t\t\t\t<a href=\"{{ base_url }}blog/post/{{ post.id }}\" target=\"_blank\" title=\"Voir l'article\">
\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-external-link\"></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t{% if post.visible %}
\t\t\t\t\t\t\t\t\t<span class=\"fa fa-eye\" title=\"Public\"></span>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% if not post.visible %}
\t\t\t\t\t\t\t\t\t<span class=\"fa fa-eye-slash\" title=\"Privé\"></span>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>{{ post.title }}</td>
\t\t\t\t\t\t\t<td>{{ post.author }}</td>
\t\t\t\t\t\t\t<td>{{ post.date_update }}</td>
\t\t\t\t\t\t\t<td>{{ post.nb_comments }}</td>
\t\t\t\t\t\t\t<td>{{ post.nb_likes }}</td>
\t\t\t\t\t\t\t<td class=\"options\">
\t\t\t\t\t\t\t\t<a href=\"{{ base_url }}admin/post/edit/{{ post.id }}\" class=\"btn btn-warning\">
\t\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil\"></span> Modifier
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<form method=\"POST\" action=\"{{ base_url }}admin/post/delete/\">
\t\t\t\t\t\t\t\t\t{{ form.hiddenInput('id', post.id) }}
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
\t\t\t{% endif %}\t\t
\t\t</div>
\t</div>
\t
{% endblock %}", "admin/blogpost.twig.html", "C:\\wamp64\\www\\oc\\parcours\\blog\\app\\view\\admin\\blogpost.twig.html");
    }
}
