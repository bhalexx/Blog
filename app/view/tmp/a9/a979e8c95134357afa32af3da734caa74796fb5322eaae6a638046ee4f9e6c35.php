<?php

/* blogpost.twig.html */
class __TwigTemplate_6fa24c67e7e49a48ab473c66c36ed8f895d9e0a2dbc67910fc6ccb0804233071 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig.html", "blogpost.twig.html", 1);
        $this->blocks = array(
            'headtitle' => array($this, 'block_headtitle'),
            'headerImage' => array($this, 'block_headerImage'),
            'title' => array($this, 'block_title'),
            'grip' => array($this, 'block_grip'),
            'scripts' => array($this, 'block_scripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["form"] = $this->loadTemplate("templates/form.twig.html", "blogpost.twig.html", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_headtitle($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array()), "html", null, true);
        echo "
";
    }

    // line 9
    public function block_headerImage($context, array $blocks = array())
    {
        // line 10
        echo "    <div class=\"cover\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "public/img/repository/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "main_picture", array()), "html", null, true);
        echo "');\"></div>
";
    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array()), "html", null, true);
        echo "
";
    }

    // line 17
    public function block_grip($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "hook", array()), "html", null, true);
        echo "
";
    }

    // line 21
    public function block_scripts($context, array $blocks = array())
    {
        // line 22
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "public/js/comment.js\"></script>
";
    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        // line 26
        echo "    <div class=\"row\">
        <div class=\"col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2\">
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "blog\" class=\"btn btn-default\">Retour</a>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2\">
            <div class=\"text-right\">
                <span class=\"small text-muted\">
                    Par <em>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "author", array()), "html", null, true);
        echo "</em>
                </span>
                <br/>
                <span class=\"small text-muted\">
                    Mis à jour le ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "date_update", array()), "html", null, true);
        echo "
                </span>
            </div>
            <h2 class=\"section-heading\">";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array()), "html", null, true);
        echo "</h2>
            <ul class=\"list-inline\">
                ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 45
            echo "                    <li class=\"small\">
                        <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "url", array()), "html", null, true);
            echo "\" class=\"text-primary\"><span class=\"fa fa-tag\"></span> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "label", array()), "html", null, true);
            echo "</a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "            </ul>
            <div class=\"well\">
                ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "hook", array()), "html", null, true);
        echo "
            </div>
            <hr/>
            ";
        // line 54
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "HTMLContent", array());
        echo "
            <div class=\"col-xs-6\">
                <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "blog/post/like/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "html", null, true);
        echo "\" class=\"btn btn-default\">
                    <span class=\"fa fa-heart\"></span> J'aime
                    ";
        // line 58
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "nb_likes", array()) > 0)) {
            // line 59
            echo "                        (";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "nb_likes", array()), "html", null, true);
            echo ")
                    ";
        }
        // line 61
        echo "                </a>
            </div>            
            <div class=\"col-xs-6 text-right\">
                <a href=\"";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/post/edit/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "html", null, true);
        echo "\" class=\"btn btn-default\">Modifier</a>
            </div>
        </div>
    </div>
    
    ";
        // line 69
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "comments_enabled", array())) {
            // line 70
            echo "        <hr />
        <div class=\"row\">
            <div class=\"col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2\">
                <h3 class=\"section-heading\">Commentaires (";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "nb_comments", array()), "html", null, true);
            echo ")</h3>            
                ";
            // line 74
            if (twig_test_empty((isset($context["comments"]) ? $context["comments"] : null))) {
                // line 75
                echo "                    <p class=\"h4\">Cet article ne comporte encore aucun commentaire. Soyez le premier à en écrire un :)</p>                
                ";
            }
            // line 77
            echo "
                <ul class=\"list-unstyled\">
                    ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 80
                echo "                        <li>
                            <hr/>
                            <span>
                                <b>";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "author", array()), "html", null, true);
                echo "</b><span class=\"small text-muted\"> - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "date_insert", array()), "html", null, true);
                echo "</span>
                            </span><br/>
                            <span>";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "content", array()), "html", null, true);
                echo "</span>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "                </ul>
                <hr />
                <form method=\"POST\" action=\"\">
                    ";
            // line 91
            echo $context["form"]->getinput("author", "Votre nom/pseudo");
            echo "
                    ";
            // line 92
            echo $context["form"]->gettextarea("content", "Votre commentaire");
            echo "
                    ";
            // line 93
            echo $context["form"]->gethiddenInput("token", (isset($context["token"]) ? $context["token"] : null));
            echo "
                    ";
            // line 94
            echo $context["form"]->getsubmit("Envoyer", array("inputClass" => "btn btn-primary submit"));
            echo "
                </form>
                <hr />          
            </div>
        </div>
    ";
        }
        // line 99
        echo "  
";
    }

    public function getTemplateName()
    {
        return "blogpost.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 99,  250 => 94,  246 => 93,  242 => 92,  238 => 91,  233 => 88,  224 => 85,  217 => 83,  212 => 80,  208 => 79,  204 => 77,  200 => 75,  198 => 74,  194 => 73,  189 => 70,  187 => 69,  177 => 64,  172 => 61,  166 => 59,  164 => 58,  157 => 56,  152 => 54,  146 => 51,  142 => 49,  130 => 46,  127 => 45,  123 => 44,  118 => 42,  112 => 39,  105 => 35,  95 => 28,  91 => 26,  88 => 25,  81 => 22,  78 => 21,  71 => 18,  68 => 17,  61 => 14,  58 => 13,  49 => 10,  46 => 9,  39 => 6,  36 => 5,  32 => 1,  30 => 3,  11 => 1,);
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

{% import 'templates/form.twig.html' as form %}

{% block headtitle %}
    {{ post.title }}
{% endblock %}

{% block headerImage %}
    <div class=\"cover\" style=\"background-image: url('{{ base_url }}public/img/repository/{{ post.main_picture }}');\"></div>
{% endblock %}

{% block title %}
    {{ post.title }}
{% endblock %}

{% block grip %}
    {{ post.hook }}
{% endblock %}

{% block scripts %}
    <script type=\"text/javascript\" src=\"{{ base_url }}public/js/comment.js\"></script>
{% endblock %}

{% block content %}
    <div class=\"row\">
        <div class=\"col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2\">
            <a href=\"{{ base_url }}blog\" class=\"btn btn-default\">Retour</a>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2\">
            <div class=\"text-right\">
                <span class=\"small text-muted\">
                    Par <em>{{ post.author }}</em>
                </span>
                <br/>
                <span class=\"small text-muted\">
                    Mis à jour le {{ post.date_update }}
                </span>
            </div>
            <h2 class=\"section-heading\">{{ post.title }}</h2>
            <ul class=\"list-inline\">
                {% for tag in tags %}
                    <li class=\"small\">
                        <a href=\"{{ base_url }}{{ tag.url }}\" class=\"text-primary\"><span class=\"fa fa-tag\"></span> {{ tag.label }}</a>
                    </li>
                {% endfor %}
            </ul>
            <div class=\"well\">
                {{ post.hook }}
            </div>
            <hr/>
            {{ post.HTMLContent | raw }}
            <div class=\"col-xs-6\">
                <a href=\"{{ base_url }}blog/post/like/{{ post.id }}\" class=\"btn btn-default\">
                    <span class=\"fa fa-heart\"></span> J'aime
                    {% if post.nb_likes > 0 %}
                        ({{ post.nb_likes }})
                    {% endif %}
                </a>
            </div>            
            <div class=\"col-xs-6 text-right\">
                <a href=\"{{ base_url }}admin/post/edit/{{ post.id }}\" class=\"btn btn-default\">Modifier</a>
            </div>
        </div>
    </div>
    
    {% if post.comments_enabled %}
        <hr />
        <div class=\"row\">
            <div class=\"col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2\">
                <h3 class=\"section-heading\">Commentaires ({{ post.nb_comments }})</h3>            
                {% if comments is empty %}
                    <p class=\"h4\">Cet article ne comporte encore aucun commentaire. Soyez le premier à en écrire un :)</p>                
                {% endif %}

                <ul class=\"list-unstyled\">
                    {% for comment in comments %}
                        <li>
                            <hr/>
                            <span>
                                <b>{{ comment.author }}</b><span class=\"small text-muted\"> - {{ comment.date_insert }}</span>
                            </span><br/>
                            <span>{{ comment.content }}</span>
                        </li>
                    {% endfor %}
                </ul>
                <hr />
                <form method=\"POST\" action=\"\">
                    {{ form.input('author', 'Votre nom/pseudo') }}
                    {{ form.textarea('content', 'Votre commentaire') }}
                    {{ form.hiddenInput('token', token) }}
                    {{ form.submit('Envoyer', { inputClass: 'btn btn-primary submit' }) }}
                </form>
                <hr />          
            </div>
        </div>
    {% endif %}  
{% endblock %}", "blogpost.twig.html", "C:\\wamp64\\www\\oc\\parcours\\blog\\app\\view\\blogpost.twig.html");
    }
}
