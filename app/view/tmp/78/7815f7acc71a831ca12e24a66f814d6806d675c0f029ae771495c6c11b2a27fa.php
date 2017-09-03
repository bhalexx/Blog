<?php

/* home.twig.html */
class __TwigTemplate_f22235523915b1f217fa9784a143465f6942d51de04a2db467e8f7d664c9851a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig.html", "home.twig.html", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_headtitle($context, array $blocks = array())
    {
        // line 4
        echo "\tAccueil
";
    }

    // line 7
    public function block_headerImage($context, array $blocks = array())
    {
        // line 8
        echo "\t<div class=\"cover\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "public/img/header_home.jpg'); background-position: center;\"></div>
";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        // line 12
        echo "\tAlexx
";
    }

    // line 15
    public function block_grip($context, array $blocks = array())
    {
        // line 16
        echo "\tUn cocktail de passion et de rigueur pour vos sites web
";
    }

    // line 19
    public function block_scripts($context, array $blocks = array())
    {
        // line 20
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "public/js/contact.js\"></script>
";
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "\t<div class=\"home\">
\t    <div class=\"row\">
\t        <div class=\"col-xs-12\">
\t    \t\t<h2>Qui suis-je ?</h2>
\t    \t\t<div class=\"col-md-4 col-lg-3\">
\t    \t\t\t<div class=\"avatar\"></div>
\t    \t\t</div>
\t    \t\t<div class=\"col-md-8 col-lg-9\">
\t\t    \t\t<p>
\t\t    \t\t\tAprès de (trop) longues années à essayer de trouver le domaine qui me passionne assez pour en faire mon métier, je finis par découvrir les joies du code en 2012, lors d'une formation accélérée (6 mois) en développement web, à l'école <a href=\"http://www.objectif3w.com/\" target=\"_blank\">Objectif 3D</a>. J'y ai appris les bases de <b>PHP</b> et <b>MySQL</b>, pour ensuite continuer d'apprendre en autodidacte.<br/>
\t\t    \t\t\tAujourd'hui encore, après diverses expériences en agences et à mon compte, je continue de parfaire mes connaissances. C'est en mai 2017 que je franchis le pas, et décide d'approfondir mes compétences en PHP, et de faire de la <b>programmation orientée objet</b> mon amie, grâce au parcours « <em>Développeuse d'application PHP/Symfony</em> » d'<a href=\"https://openclassrooms.com/\" target=\"_blank\">OpenClassRooms</a>.
\t\t    \t\t</p>\t\t    \t\t
\t    \t\t</div>
\t    \t\t<div class=\"text-center\">
\t    \t\t\t<a href=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "public/files/Dubreucq_Alexandra_CV.pdf\" target=\"_blank\" class=\"btn btn-default\">
\t\t    \t\t\t<span class=\"fa fa-file-pdf-o\"></span> Télécharger mon CV
\t\t    \t\t</a>
\t    \t\t</div>
\t        </div>
\t    </div>
\t    <div class=\"row\">
\t\t\t<div class=\"col-xs-6 col-xs-offset-3\">
\t\t\t\t<hr/>
\t\t\t</div>
\t    </div>
\t    <div class=\"row\">
\t        <div class=\"col-xs-12\">
\t    \t\t<h2>Suivez-moi</h2>
\t    \t\t<div class=\"text-center\">
\t\t    \t\t<ul class=\"list-unstyled list-inline\">
\t\t       \t\t\t<li>
\t\t\t                <a href=\"https://github.com/bhalexx/\" target=\"_blank\">
\t\t\t                    <span class=\"fa-stack fa-2x\">
\t\t\t                        <i class=\"fa fa-circle fa-stack-2x\"></i>
\t\t\t                        <i class=\"fa fa-github fa-stack-1x fa-inverse\"></i>
\t\t\t                    </span>
\t\t\t                </a>
\t\t\t            </li>
\t\t\t            <li>
\t\t\t                <a href=\"https://fr.linkedin.com/in/alexsandrad\" target=\"_blank\">
\t\t\t                    <span class=\"fa-stack fa-2x\">
\t\t\t                        <i class=\"fa fa-circle fa-stack-2x\"></i>
\t\t\t                        <i class=\"fa fa-linkedin fa-stack-1x fa-inverse\"></i>
\t\t\t                    </span>
\t\t\t                </a>
\t\t\t            </li>
\t\t\t            <li>
\t\t\t                <a href=\"http://fr.viadeo.com/fr/profile/alexandra.dubreucq\" target=\"_blank\">
\t\t\t                    <span class=\"fa-stack fa-2x\">
\t\t\t                        <i class=\"fa fa-circle fa-stack-2x\"></i>
\t\t\t                        <i class=\"fa fa-viadeo fa-stack-1x fa-inverse\"></i>
\t\t\t                    </span>
\t\t\t                </a>
\t\t\t            </li>
\t\t       \t\t</ul>
\t    \t\t</div>
\t        </div>
\t    </div>
\t    <div class=\"row\">
\t\t\t<div class=\"col-xs-6 col-xs-offset-3\">
\t\t\t\t<hr/>
\t\t\t</div>
\t    </div>
\t    <div class=\"row\">
\t        <div class=\"col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2\">
\t    \t\t<h2>Contactez-moi</h2>
\t    \t\t";
        // line 90
        $this->loadTemplate("templates/contact.form.twig.html", "home.twig.html", 90)->display(array_merge($context, array("url" => "home")));
        // line 91
        echo "\t    \t</div>
\t    </div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "home.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 91,  151 => 90,  96 => 38,  80 => 24,  77 => 23,  70 => 20,  67 => 19,  62 => 16,  59 => 15,  54 => 12,  51 => 11,  44 => 8,  41 => 7,  36 => 4,  33 => 3,  11 => 1,);
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
\tAccueil
{% endblock %}

{% block headerImage %}
\t<div class=\"cover\" style=\"background-image: url('{{ base_url }}public/img/header_home.jpg'); background-position: center;\"></div>
{% endblock %}

{% block title %}
\tAlexx
{% endblock %}

{% block grip %}
\tUn cocktail de passion et de rigueur pour vos sites web
{% endblock %}

{% block scripts %}
    <script type=\"text/javascript\" src=\"{{ base_url }}public/js/contact.js\"></script>
{% endblock %}

{% block content %}
\t<div class=\"home\">
\t    <div class=\"row\">
\t        <div class=\"col-xs-12\">
\t    \t\t<h2>Qui suis-je ?</h2>
\t    \t\t<div class=\"col-md-4 col-lg-3\">
\t    \t\t\t<div class=\"avatar\"></div>
\t    \t\t</div>
\t    \t\t<div class=\"col-md-8 col-lg-9\">
\t\t    \t\t<p>
\t\t    \t\t\tAprès de (trop) longues années à essayer de trouver le domaine qui me passionne assez pour en faire mon métier, je finis par découvrir les joies du code en 2012, lors d'une formation accélérée (6 mois) en développement web, à l'école <a href=\"http://www.objectif3w.com/\" target=\"_blank\">Objectif 3D</a>. J'y ai appris les bases de <b>PHP</b> et <b>MySQL</b>, pour ensuite continuer d'apprendre en autodidacte.<br/>
\t\t    \t\t\tAujourd'hui encore, après diverses expériences en agences et à mon compte, je continue de parfaire mes connaissances. C'est en mai 2017 que je franchis le pas, et décide d'approfondir mes compétences en PHP, et de faire de la <b>programmation orientée objet</b> mon amie, grâce au parcours « <em>Développeuse d'application PHP/Symfony</em> » d'<a href=\"https://openclassrooms.com/\" target=\"_blank\">OpenClassRooms</a>.
\t\t    \t\t</p>\t\t    \t\t
\t    \t\t</div>
\t    \t\t<div class=\"text-center\">
\t    \t\t\t<a href=\"{{ base_url }}public/files/Dubreucq_Alexandra_CV.pdf\" target=\"_blank\" class=\"btn btn-default\">
\t\t    \t\t\t<span class=\"fa fa-file-pdf-o\"></span> Télécharger mon CV
\t\t    \t\t</a>
\t    \t\t</div>
\t        </div>
\t    </div>
\t    <div class=\"row\">
\t\t\t<div class=\"col-xs-6 col-xs-offset-3\">
\t\t\t\t<hr/>
\t\t\t</div>
\t    </div>
\t    <div class=\"row\">
\t        <div class=\"col-xs-12\">
\t    \t\t<h2>Suivez-moi</h2>
\t    \t\t<div class=\"text-center\">
\t\t    \t\t<ul class=\"list-unstyled list-inline\">
\t\t       \t\t\t<li>
\t\t\t                <a href=\"https://github.com/bhalexx/\" target=\"_blank\">
\t\t\t                    <span class=\"fa-stack fa-2x\">
\t\t\t                        <i class=\"fa fa-circle fa-stack-2x\"></i>
\t\t\t                        <i class=\"fa fa-github fa-stack-1x fa-inverse\"></i>
\t\t\t                    </span>
\t\t\t                </a>
\t\t\t            </li>
\t\t\t            <li>
\t\t\t                <a href=\"https://fr.linkedin.com/in/alexsandrad\" target=\"_blank\">
\t\t\t                    <span class=\"fa-stack fa-2x\">
\t\t\t                        <i class=\"fa fa-circle fa-stack-2x\"></i>
\t\t\t                        <i class=\"fa fa-linkedin fa-stack-1x fa-inverse\"></i>
\t\t\t                    </span>
\t\t\t                </a>
\t\t\t            </li>
\t\t\t            <li>
\t\t\t                <a href=\"http://fr.viadeo.com/fr/profile/alexandra.dubreucq\" target=\"_blank\">
\t\t\t                    <span class=\"fa-stack fa-2x\">
\t\t\t                        <i class=\"fa fa-circle fa-stack-2x\"></i>
\t\t\t                        <i class=\"fa fa-viadeo fa-stack-1x fa-inverse\"></i>
\t\t\t                    </span>
\t\t\t                </a>
\t\t\t            </li>
\t\t       \t\t</ul>
\t    \t\t</div>
\t        </div>
\t    </div>
\t    <div class=\"row\">
\t\t\t<div class=\"col-xs-6 col-xs-offset-3\">
\t\t\t\t<hr/>
\t\t\t</div>
\t    </div>
\t    <div class=\"row\">
\t        <div class=\"col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2\">
\t    \t\t<h2>Contactez-moi</h2>
\t    \t\t{% include \"templates/contact.form.twig.html\" with {'url': 'home'} %}
\t    \t</div>
\t    </div>
\t</div>
{% endblock %}", "home.twig.html", "C:\\wamp64\\www\\oc\\parcours\\blog\\app\\view\\home.twig.html");
    }
}
