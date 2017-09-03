<?php

/* admin/blogpost.add.twig.html */
class __TwigTemplate_abc0e9e15306277ab8ead27a5c2bb0ef79e2386e4ee9fadef6bec4246af72985 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.twig.html", "admin/blogpost.add.twig.html", 1);
        $this->blocks = array(
            'scripts' => array($this, 'block_scripts'),
            'style' => array($this, 'block_style'),
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
        $context["form"] = $this->loadTemplate("templates/form.twig.html", "admin/blogpost.add.twig.html", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_scripts($context, array $blocks = array())
    {
        // line 6
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "vendor/ckeditor/ckeditor/ckeditor.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "public/js/admin/ckeditor.manager.js\"></script>
    
    <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "public/js/lib/select2.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "public/js/admin/select2.manager.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "public/js/admin/blogpost.js\"></script>
";
    }

    // line 14
    public function block_style($context, array $blocks = array())
    {
        // line 15
        echo "   \t<link href=\"";
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "public/css/lib/select2.min.css\" rel=\"stylesheet\" type=\"text/css\">
";
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        // line 19
        echo "\t<div class=\"row\">
\t\t<div class=\"col-xs-12\">
\t\t\t<a href=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/posts\" class=\"btn btn-default\">
\t\t\t\t<span class=\"fa fa-list\"></span> Retour à la liste
\t\t\t</a>
\t\t\t<h2>Ajouter un article</h2>
\t\t\t<p>
\t\t\t\tRemplissez le formulaire ci-dessous pour ajouter un article.
\t\t\t</p>
\t\t</div>
\t</div>
\t<hr />\t
\t<div class=\"row blogpost-form\">
\t\t<form method=\"POST\" action=\"\" class=\"form\" enctype=\"multipart/form-data\">
\t\t\t<div class=\"col-md-8 col-lg-9\">
\t\t\t\t";
        // line 34
        echo $context["form"]->getinput("title", "Titre", array("class" => "col-xs-12", "value" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "title", array())));
        echo "
\t\t\t\t";
        // line 35
        echo $context["form"]->gettextarea("hook", "Chapô", array("class" => "col-xs-12", "value" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "hook", array())));
        echo "
\t\t\t\t";
        // line 36
        echo $context["form"]->gettextarea("content", "Contenu", array("class" => "col-xs-12", "value" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "HTMLContent", array())));
        echo "
\t\t\t\t";
        // line 37
        echo $context["form"]->getselect("tags", "Tags (max. 3)", (isset($context["tags"]) ? $context["tags"] : null), "id", "label", array("class" => "col-xs-12", "multiple" => true, "insertBlank" => false));
        echo "\t\t\t\t
\t\t\t\t";
        // line 38
        echo $context["form"]->gethiddenInput("token", (isset($context["token"]) ? $context["token"] : null));
        echo "
\t\t\t\t";
        // line 39
        echo $context["form"]->getsubmit("Sauvegarder", array("class" => "col-xs-12", "inputClass" => "btn btn-primary submit"));
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-md-4 col-lg-3\">
\t\t\t\t";
        // line 42
        echo $context["form"]->getinputFileImg("picture", "Image principale", null, array("class" => "empty"));
        echo "
\t\t\t\t";
        // line 43
        echo $context["form"]->getcheckbox("visible", "Rendre public", array("checked" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "visible", array())));
        echo "
\t\t\t\t";
        // line 44
        echo $context["form"]->getcheckbox("comments_enabled", "Activer commentaires", array("checked" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "comments_enabled", array())));
        echo "
\t\t\t\t";
        // line 45
        echo $context["form"]->getinput("author", "Auteur", array("value" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "author", array())));
        echo "
\t\t\t</div>
\t\t</form>
\t</div>\t
";
    }

    public function getTemplateName()
    {
        return "admin/blogpost.add.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 45,  127 => 44,  123 => 43,  119 => 42,  113 => 39,  109 => 38,  105 => 37,  101 => 36,  97 => 35,  93 => 34,  77 => 21,  73 => 19,  70 => 18,  63 => 15,  60 => 14,  54 => 11,  50 => 10,  46 => 9,  41 => 7,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
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
    <script type=\"text/javascript\" src=\"{{ base_url }}vendor/ckeditor/ckeditor/ckeditor.js\"></script>
    <script type=\"text/javascript\" src=\"{{ base_url }}public/js/admin/ckeditor.manager.js\"></script>
    
    <script type=\"text/javascript\" src=\"{{ base_url }}public/js/lib/select2.min.js\"></script>
    <script type=\"text/javascript\" src=\"{{ base_url }}public/js/admin/select2.manager.js\"></script>
    <script type=\"text/javascript\" src=\"{{ base_url }}public/js/admin/blogpost.js\"></script>
{% endblock %}

{% block style %}
   \t<link href=\"{{ base_url }}public/css/lib/select2.min.css\" rel=\"stylesheet\" type=\"text/css\">
{% endblock %}

{% block content %}
\t<div class=\"row\">
\t\t<div class=\"col-xs-12\">
\t\t\t<a href=\"{{ base_url }}admin/posts\" class=\"btn btn-default\">
\t\t\t\t<span class=\"fa fa-list\"></span> Retour à la liste
\t\t\t</a>
\t\t\t<h2>Ajouter un article</h2>
\t\t\t<p>
\t\t\t\tRemplissez le formulaire ci-dessous pour ajouter un article.
\t\t\t</p>
\t\t</div>
\t</div>
\t<hr />\t
\t<div class=\"row blogpost-form\">
\t\t<form method=\"POST\" action=\"\" class=\"form\" enctype=\"multipart/form-data\">
\t\t\t<div class=\"col-md-8 col-lg-9\">
\t\t\t\t{{ form.input('title', 'Titre', { class: 'col-xs-12', value: data.title }) }}
\t\t\t\t{{ form.textarea('hook', 'Chapô', { class: 'col-xs-12', value: data.hook }) }}
\t\t\t\t{{ form.textarea('content', 'Contenu', { class: 'col-xs-12', value: data.HTMLContent }) }}
\t\t\t\t{{ form.select('tags', 'Tags (max. 3)', tags, 'id', 'label', { class: 'col-xs-12', multiple: true, insertBlank: false }) }}\t\t\t\t
\t\t\t\t{{ form.hiddenInput('token', token) }}
\t\t\t\t{{ form.submit('Sauvegarder', { class: 'col-xs-12', inputClass: 'btn btn-primary submit' }) }}
\t\t\t</div>
\t\t\t<div class=\"col-md-4 col-lg-3\">
\t\t\t\t{{ form.inputFileImg('picture', 'Image principale', null, { class: 'empty' }) }}
\t\t\t\t{{ form.checkbox('visible', 'Rendre public', { checked: data.visible }) }}
\t\t\t\t{{ form.checkbox('comments_enabled', 'Activer commentaires', { checked: data.comments_enabled }) }}
\t\t\t\t{{ form.input('author', 'Auteur', { value: data.author }) }}
\t\t\t</div>
\t\t</form>
\t</div>\t
{% endblock %}", "admin/blogpost.add.twig.html", "C:\\wamp64\\www\\oc\\parcours\\blog\\app\\view\\admin\\blogpost.add.twig.html");
    }
}
