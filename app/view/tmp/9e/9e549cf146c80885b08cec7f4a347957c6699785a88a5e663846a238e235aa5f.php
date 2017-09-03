<?php

/* admin/comments.twig.html */
class __TwigTemplate_f1d835316f7ae424d1ce7b1e40c99020ec718db4295c65ded94e322929020ca9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.twig.html", "admin/comments.twig.html", 1);
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
        $context["form"] = $this->loadTemplate("templates/form.twig.html", "admin/comments.twig.html", 3);
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
\t\t\t<h2>Commentaires (";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : null), "html", null, true);
        echo ")</h2>
\t\t\t<p>
\t\t\t\tRetrouvez ci-dessous la liste des commentaires en attente de validation.
\t\t\t</p>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-xs-12\">\t\t\t
\t\t\t";
        // line 19
        if (twig_test_empty((isset($context["comments"]) ? $context["comments"] : null))) {
            // line 20
            echo "\t\t\t\t<p class=\"h3 text-center\">Aucun commentaire n'est en attente de validation.</p>
\t\t\t";
        }
        // line 22
        echo "\t\t\t
\t\t\t";
        // line 23
        if ( !twig_test_empty((isset($context["comments"]) ? $context["comments"] : null))) {
            // line 24
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 25
                echo "\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t<b>De : </b>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "author", array()), "html", null, true);
                echo " - <span class=\"small text-muted\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "date_insert", array()), "html", null, true);
                echo "</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<b>Article : </b>
\t\t\t\t\t\t<a href=\"";
                // line 31
                echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "getBlogPostUrl", array()), "html", null, true);
                echo "\" target=\"_blank\" class=\"text-muted\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "blogpost_title", array()), "html", null, true);
                echo "</a>
\t\t\t\t\t\t<p><b>Message : </b>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "content", array()), "html", null, true);
                echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t<form method=\"POST\" action=\"";
                // line 35
                echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
                echo "admin/comments/validate\">
\t\t\t\t\t\t\t";
                // line 36
                echo $context["form"]->gethiddenInput("comment_id", $this->getAttribute($context["comment"], "id", array()));
                echo "
\t\t\t\t\t\t\t";
                // line 37
                echo $context["form"]->gethiddenInput("from", null);
                echo "
\t\t\t\t\t\t\t";
                // line 38
                echo $context["form"]->gethiddenInput("blogpostId", null);
                echo "
\t\t\t\t\t\t\t";
                // line 39
                echo $context["form"]->gethiddenInput("token", (isset($context["token"]) ? $context["token"] : null));
                echo "
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-success\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-check\"></span> Valider
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t<form method=\"POST\" action=\"";
                // line 44
                echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
                echo "admin/comments/delete\">
\t\t\t\t\t\t\t";
                // line 45
                echo $context["form"]->gethiddenInput("comment_id", $this->getAttribute($context["comment"], "id", array()));
                echo "
\t\t\t\t\t\t\t";
                // line 46
                echo $context["form"]->gethiddenInput("from", null);
                echo "
\t\t\t\t\t\t\t";
                // line 47
                echo $context["form"]->gethiddenInput("blogpostId", null);
                echo "
\t\t\t\t\t\t\t";
                // line 48
                echo $context["form"]->gethiddenInput("token", (isset($context["token"]) ? $context["token"] : null));
                echo "
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span> Supprimer
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "\t\t\t";
        }
        // line 57
        echo "\t\t</div>
\t</div>
\t
";
    }

    public function getTemplateName()
    {
        return "admin/comments.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 57,  151 => 56,  137 => 48,  133 => 47,  129 => 46,  125 => 45,  121 => 44,  113 => 39,  109 => 38,  105 => 37,  101 => 36,  97 => 35,  91 => 32,  84 => 31,  75 => 27,  71 => 25,  66 => 24,  64 => 23,  61 => 22,  57 => 20,  55 => 19,  44 => 11,  38 => 8,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
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
\t\t\t<h2>Commentaires ({{ count }})</h2>
\t\t\t<p>
\t\t\t\tRetrouvez ci-dessous la liste des commentaires en attente de validation.
\t\t\t</p>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-xs-12\">\t\t\t
\t\t\t{% if comments is empty %}
\t\t\t\t<p class=\"h3 text-center\">Aucun commentaire n'est en attente de validation.</p>
\t\t\t{% endif %}
\t\t\t
\t\t\t{% if comments is not empty %}
\t\t\t\t{% for comment in comments %}
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t<b>De : </b>{{ comment.author }} - <span class=\"small text-muted\">{{ comment.date_insert }}</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<b>Article : </b>
\t\t\t\t\t\t<a href=\"{{ base_url }}{{ comment.getBlogPostUrl }}\" target=\"_blank\" class=\"text-muted\">{{ comment.blogpost_title }}</a>
\t\t\t\t\t\t<p><b>Message : </b>{{ comment.content }}</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t<form method=\"POST\" action=\"{{ base_url }}admin/comments/validate\">
\t\t\t\t\t\t\t{{ form.hiddenInput('comment_id', comment.id) }}
\t\t\t\t\t\t\t{{ form.hiddenInput('from', null) }}
\t\t\t\t\t\t\t{{ form.hiddenInput('blogpostId', null) }}
\t\t\t\t\t\t\t{{ form.hiddenInput('token', token) }}
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-success\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-check\"></span> Valider
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t<form method=\"POST\" action=\"{{ base_url }}admin/comments/delete\">
\t\t\t\t\t\t\t{{ form.hiddenInput('comment_id', comment.id) }}
\t\t\t\t\t\t\t{{ form.hiddenInput('from', null) }}
\t\t\t\t\t\t\t{{ form.hiddenInput('blogpostId', null) }}
\t\t\t\t\t\t\t{{ form.hiddenInput('token', token) }}
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span> Supprimer
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t{% endif %}
\t\t</div>
\t</div>
\t
{% endblock %}", "admin/comments.twig.html", "C:\\wamp64\\www\\oc\\parcours\\blog\\app\\view\\admin\\comments.twig.html");
    }
}
