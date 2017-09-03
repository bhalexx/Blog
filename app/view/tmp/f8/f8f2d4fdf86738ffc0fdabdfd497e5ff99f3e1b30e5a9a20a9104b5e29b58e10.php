<?php

/* blogposts.twig.html */
class __TwigTemplate_a576924556b44169f72b1beb2ee41218cbbd6a468a71058728e888ee747ee785 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig.html", "blogposts.twig.html", 1);
        $this->blocks = array(
            'headtitle' => array($this, 'block_headtitle'),
            'headerImage' => array($this, 'block_headerImage'),
            'title' => array($this, 'block_title'),
            'grip' => array($this, 'block_grip'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_headtitle($context, array $blocks = array())
    {
        // line 4
        echo "\tBlog
";
    }

    // line 7
    public function block_headerImage($context, array $blocks = array())
    {
        // line 8
        echo "\t<div class=\"cover\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "public/img/header_blog.jpg');\"></div>
";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        // line 12
        echo "\tBlog
";
    }

    // line 15
    public function block_grip($context, array $blocks = array())
    {
        // line 16
        echo "\tDes articles sur les sujets qui me tiennent à cœur
";
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        // line 20
        echo "\t<div class=\"row grid\">
\t\t";
        // line 21
        if ( !twig_test_empty((isset($context["tags"]) ? $context["tags"] : null))) {
            // line 22
            echo "\t\t<div class=\"col-xs-12\">
\t\t\t<h4><span class=\"fa fa-tags\"></span> Tags</h4>
\t\t\t<ul class=\"list-unstyled list-inline col-xs-12\">
\t\t\t\t";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 26
                echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                // line 27
                echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "url", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<span class=\"label label-primary\">";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "label", array()), "html", null, true);
                echo " <small>(";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "nb_blogposts", array()), "html", null, true);
                echo ")</small></span>
\t\t\t\t\t\t</a>\t\t\t\t\t 
\t\t\t\t\t</li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "\t\t\t</ul>
\t\t</div>
\t\t";
        }
        // line 35
        echo "\t\t<div class=\"col-xs-12\">
\t\t\t";
        // line 36
        if (twig_test_empty((isset($context["posts"]) ? $context["posts"] : null))) {
            // line 37
            echo "\t\t\t\t<p class=\"h3 text-center\">Oops ! Aucun article n'a encore été publié. Revenez plus tard :)</p>
\t\t\t";
        }
        // line 39
        echo "\t\t\t
\t\t\t";
        // line 40
        if ( !twig_test_empty((isset($context["posts"]) ? $context["posts"] : null))) {
            // line 41
            echo "\t\t\t\t<div class=\"posts\">
\t\t\t\t\t";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 43
                echo "\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-4 post\">
\t\t\t\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t\t\t\t<a href=\"";
                // line 45
                echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\" style=\"background-image: url('";
                echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
                echo twig_escape_filter($this->env, (isset($context["picture_repository"]) ? $context["picture_repository"] : null), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "main_picture", array()), "html", null, true);
                echo "');\" class=\"cover-img\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 49
                echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t</a>\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t<span class=\"small text-muted\">Mis à jour le ";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "date_update", array()), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t<p>";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "hook", array()), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 55
                echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\" class=\"more\">
\t\t\t\t\t\t\t\t\t\t<span class=\"label label-primary\">Lire la suite</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "\t\t\t\t</div>
\t\t\t";
        }
        // line 64
        echo "\t\t</div>
\t</div>\t
\t<div class=\"clear\"></div>
";
    }

    public function getTemplateName()
    {
        return "blogposts.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 64,  178 => 62,  164 => 55,  160 => 54,  156 => 53,  150 => 50,  145 => 49,  133 => 45,  129 => 43,  125 => 42,  122 => 41,  120 => 40,  117 => 39,  113 => 37,  111 => 36,  108 => 35,  103 => 32,  91 => 28,  86 => 27,  83 => 26,  79 => 25,  74 => 22,  72 => 21,  69 => 20,  66 => 19,  61 => 16,  58 => 15,  53 => 12,  50 => 11,  43 => 8,  40 => 7,  35 => 4,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.twig.html' %}

{% block headtitle %}
\tBlog
{% endblock %}

{% block headerImage %}
\t<div class=\"cover\" style=\"background-image: url('{{ base_url }}public/img/header_blog.jpg');\"></div>
{% endblock %}

{% block title %}
\tBlog
{% endblock %}

{% block grip %}
\tDes articles sur les sujets qui me tiennent à cœur
{% endblock %}

{% block content %}
\t<div class=\"row grid\">
\t\t{% if tags is not empty %}
\t\t<div class=\"col-xs-12\">
\t\t\t<h4><span class=\"fa fa-tags\"></span> Tags</h4>
\t\t\t<ul class=\"list-unstyled list-inline col-xs-12\">
\t\t\t\t{% for tag in tags %}
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{ base_url }}{{ tag.url }}\">
\t\t\t\t\t\t\t<span class=\"label label-primary\">{{ tag.label }} <small>({{ tag.nb_blogposts }})</small></span>
\t\t\t\t\t\t</a>\t\t\t\t\t 
\t\t\t\t\t</li>
\t\t\t\t{% endfor %}
\t\t\t</ul>
\t\t</div>
\t\t{% endif %}
\t\t<div class=\"col-xs-12\">
\t\t\t{% if posts is empty %}
\t\t\t\t<p class=\"h3 text-center\">Oops ! Aucun article n'a encore été publié. Revenez plus tard :)</p>
\t\t\t{% endif %}
\t\t\t
\t\t\t{% if posts is not empty %}
\t\t\t\t<div class=\"posts\">
\t\t\t\t\t{% for post in posts %}
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-4 post\">
\t\t\t\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t\t\t\t<a href=\"{{ base_url }}{{ post.url }}\" style=\"background-image: url('{{ base_url }}{{ picture_repository }}{{ post.main_picture }}');\" class=\"cover-img\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ base_url }}{{ post.url }}\">
\t\t\t\t\t\t\t\t\t\t\t{{ post.title }}
\t\t\t\t\t\t\t\t\t\t</a>\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t<span class=\"small text-muted\">Mis à jour le {{ post.date_update }}</span>
\t\t\t\t\t\t\t\t\t<p>{{ post.hook }}</p>
\t\t\t\t\t\t\t\t\t<a href=\"{{ base_url }}{{ post.url }}\" class=\"more\">
\t\t\t\t\t\t\t\t\t\t<span class=\"label label-primary\">Lire la suite</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t</div>
\t</div>\t
\t<div class=\"clear\"></div>
{% endblock %}", "blogposts.twig.html", "C:\\wamp64\\www\\oc\\parcours\\blog\\app\\view\\blogposts.twig.html");
    }
}
