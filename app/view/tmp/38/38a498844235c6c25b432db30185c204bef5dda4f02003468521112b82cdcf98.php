<?php

/* admin/tags.add.twig.html */
class __TwigTemplate_36f97fb3a2b4d75c2cc10810497d51de2f4e3c69517a52989139e5389c006f77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.twig.html", "admin/tags.add.twig.html", 1);
        $this->blocks = array(
            'scripts' => array($this, 'block_scripts'),
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
        $context["form"] = $this->loadTemplate("templates/form.twig.html", "admin/tags.add.twig.html", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_scripts($context, array $blocks = array())
    {
        // line 6
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "public/js/admin/tags.js\"></script>
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "\t<div class=\"row\">
\t\t<div class=\"col-xs-12\">
\t\t\t<a href=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/tags\" class=\"btn btn-default\">
\t\t\t\t<span class=\"fa fa-list\"></span> Retour à la liste
\t\t\t</a>
\t\t\t<h2>Ajouter un tag</h2>
\t\t\t<p>
\t\t\t\tRemplissez le formulaire ci-dessous pour ajouter un tag.
\t\t\t</p>
\t\t</div>
\t</div>
\t<hr />
\t<div class=\"row\">
\t\t<div class=\"col-xs-12\">
\t\t\t<form method=\"POST\" action=\"\" class=\"form\">
\t\t\t\t";
        // line 25
        echo $context["form"]->getinput("label", "Nom du tag", array("class" => "col-xs-12"));
        echo "
\t\t\t\t";
        // line 26
        echo $context["form"]->gethiddenInput("token", (isset($context["token"]) ? $context["token"] : null));
        echo "
\t\t\t\t";
        // line 27
        echo $context["form"]->getsubmit("Sauvegarder", array("class" => "col-xs-12", "inputClass" => "btn btn-primary submit"));
        echo "
\t\t\t</form>
\t\t</div>
\t</div>\t
";
    }

    public function getTemplateName()
    {
        return "admin/tags.add.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 27,  69 => 26,  65 => 25,  49 => 12,  45 => 10,  42 => 9,  35 => 6,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
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

{% block scripts %}
    <script type=\"text/javascript\" src=\"{{ base_url }}public/js/admin/tags.js\"></script>
{% endblock %}

{% block content %}
\t<div class=\"row\">
\t\t<div class=\"col-xs-12\">
\t\t\t<a href=\"{{ base_url }}admin/tags\" class=\"btn btn-default\">
\t\t\t\t<span class=\"fa fa-list\"></span> Retour à la liste
\t\t\t</a>
\t\t\t<h2>Ajouter un tag</h2>
\t\t\t<p>
\t\t\t\tRemplissez le formulaire ci-dessous pour ajouter un tag.
\t\t\t</p>
\t\t</div>
\t</div>
\t<hr />
\t<div class=\"row\">
\t\t<div class=\"col-xs-12\">
\t\t\t<form method=\"POST\" action=\"\" class=\"form\">
\t\t\t\t{{ form.input('label', 'Nom du tag', { class: 'col-xs-12' }) }}
\t\t\t\t{{ form.hiddenInput('token', token) }}
\t\t\t\t{{ form.submit('Sauvegarder', { class: 'col-xs-12', inputClass: 'btn btn-primary submit' }) }}
\t\t\t</form>
\t\t</div>
\t</div>\t
{% endblock %}", "admin/tags.add.twig.html", "C:\\wamp64\\www\\oc\\parcours\\blog\\app\\view\\admin\\tags.add.twig.html");
    }
}
