<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* note/index.html.twig */
class __TwigTemplate_479989c66f9cba3c5fe61cdbd2de87fd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "note/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "note/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "note/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello NoteController!
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div class=\"logo\">
\t\t<img src=\"";
        // line 8
        echo "assets/img/FaySchool.svg";
        echo "\" alt=\"\" class=\"logo\">
\t</div>
\t<div id=\"container\">
\t\t<div class=\"subject\">
\t\t\t<br>
\t\t\t<h1>Quelle matière ?</h1>
\t\t</div>

\t\t<div class=\"second-container\">

\t\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matters"]) || array_key_exists("matters", $context) ? $context["matters"] : (function () { throw new RuntimeError('Variable "matters" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["matter"]) {
            // line 19
            echo "\t\t\t\t<span class=\"img\">
\t\t\t\t\t<a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_note_matter", ["slug" => twig_get_attribute($this->env, $this->source, $context["matter"], "slug", [], "any", false, false, false, 20)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn\">
\t\t\t\t\t\t\t<img src=\"assets/img/";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["matter"], "image", [], "any", false, false, false, 22), "html", null, true);
            echo "\" width=\"120px\" class=\"picture\">
\t\t\t\t\t\t\t<div class=\"text\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["matter"], "name", [], "any", false, false, false, 23), "html", null, true);
            echo "</div>
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>
\t\t\t\t</span>

\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['matter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t\t\t<span class=\"img\">
\t\t\t\t<a href=\"#demo2\">
\t\t\t\t\t<button type=\"button\" class=\"btn\">
\t\t\t\t\t\t<i class=\"fa-solid fa-circle-plus\"></i>
\t\t\t\t\t\t<div class=\"text\">AJOUTER</div>
\t\t\t\t\t</button>
\t\t\t\t</a>
\t\t\t</span>


\t\t</div>

\t\t<div class=\"rows\">

\t\t\t<a href=\"#demo\">Gérer mes matieres</a>

\t\t\t<div id=\"demo\" class=\"modal\">
\t\t\t\t<div class=\"modal_content\">


\t\t\t\t\t<p>Gérer mes matieres</p>
\t\t\t\t\t<ul>


\t\t\t\t\t\t";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matters"]) || array_key_exists("matters", $context) ? $context["matters"] : (function () { throw new RuntimeError('Variable "matters" does not exist.', 53, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["matter"]) {
            // line 54
            echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<img src=\"assets/img/";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["matter"], "image", [], "any", false, false, false, 55), "html", null, true);
            echo "\" width=\"80px\" alt=\"\">
\t\t\t\t\t\t\t\t";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["matter"], "name", [], "any", false, false, false, 56), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t<button class=\"button_modal_edit\">
\t\t\t\t\t\t\t\t\t<a href=\"#demo3\">EDIT</a>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<button class=\"button_modal_remove\">REMOVE</button>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['matter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "
\t\t\t\t\t</ul>

\t\t\t\t\t<a href=\"\" class=\"modal_close\">&times;</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t\t<!-- Modal -->

\t\t<div id=\"demo2\" class=\"modal\">
\t\t\t<div class=\"modal_content\">
\t\t\t\t<h1>Hello</h1>

\t\t\t\t<p>Bienvenue sur la fenêtre modale !</p>
\t\t\t\t";
        // line 79
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), 'form');
        echo "


\t\t\t\t\t<a href=\"\" class=\"modal_close\">&times;</a>
\t\t\t\t</div>
\t\t\t</div>


\t\t</div>
\t\t<div id=\"demo3\" class=\"modal\">
\t\t\t<div class=\"modal_content\">
\t\t\t\t<h1>Hello</h1>

\t\t\t\t<p>Bienvenue sur la fenêtre modale !</p>


\t\t\t\t<a href=\"#demo\" class=\"modal_close\">&times;</a>
\t\t\t</div>
\t\t</div>


\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "note/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 79,  183 => 63,  170 => 56,  166 => 55,  163 => 54,  159 => 53,  133 => 29,  121 => 23,  117 => 22,  112 => 20,  109 => 19,  105 => 18,  92 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello NoteController!
{% endblock %}

{% block body %}
\t<div class=\"logo\">
\t\t<img src=\"{{\"assets/img/FaySchool.svg\"}}\" alt=\"\" class=\"logo\">
\t</div>
\t<div id=\"container\">
\t\t<div class=\"subject\">
\t\t\t<br>
\t\t\t<h1>Quelle matière ?</h1>
\t\t</div>

\t\t<div class=\"second-container\">

\t\t\t{% for matter in matters %}
\t\t\t\t<span class=\"img\">
\t\t\t\t\t<a href=\"{{path('app_note_matter',{slug:matter.slug})}}\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn\">
\t\t\t\t\t\t\t<img src=\"assets/img/{{matter.image}}\" width=\"120px\" class=\"picture\">
\t\t\t\t\t\t\t<div class=\"text\">{{matter.name}}</div>
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>
\t\t\t\t</span>

\t\t\t{% endfor %}
\t\t\t<span class=\"img\">
\t\t\t\t<a href=\"#demo2\">
\t\t\t\t\t<button type=\"button\" class=\"btn\">
\t\t\t\t\t\t<i class=\"fa-solid fa-circle-plus\"></i>
\t\t\t\t\t\t<div class=\"text\">AJOUTER</div>
\t\t\t\t\t</button>
\t\t\t\t</a>
\t\t\t</span>


\t\t</div>

\t\t<div class=\"rows\">

\t\t\t<a href=\"#demo\">Gérer mes matieres</a>

\t\t\t<div id=\"demo\" class=\"modal\">
\t\t\t\t<div class=\"modal_content\">


\t\t\t\t\t<p>Gérer mes matieres</p>
\t\t\t\t\t<ul>


\t\t\t\t\t\t{% for matter in matters %}
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<img src=\"assets/img/{{matter.image}}\" width=\"80px\" alt=\"\">
\t\t\t\t\t\t\t\t{{matter.name}}
\t\t\t\t\t\t\t\t<button class=\"button_modal_edit\">
\t\t\t\t\t\t\t\t\t<a href=\"#demo3\">EDIT</a>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<button class=\"button_modal_remove\">REMOVE</button>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t</ul>

\t\t\t\t\t<a href=\"\" class=\"modal_close\">&times;</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t\t<!-- Modal -->

\t\t<div id=\"demo2\" class=\"modal\">
\t\t\t<div class=\"modal_content\">
\t\t\t\t<h1>Hello</h1>

\t\t\t\t<p>Bienvenue sur la fenêtre modale !</p>
\t\t\t\t{{form(form)}}


\t\t\t\t\t<a href=\"\" class=\"modal_close\">&times;</a>
\t\t\t\t</div>
\t\t\t</div>


\t\t</div>
\t\t<div id=\"demo3\" class=\"modal\">
\t\t\t<div class=\"modal_content\">
\t\t\t\t<h1>Hello</h1>

\t\t\t\t<p>Bienvenue sur la fenêtre modale !</p>


\t\t\t\t<a href=\"#demo\" class=\"modal_close\">&times;</a>
\t\t\t</div>
\t\t</div>


\t</div>
{% endblock %}
", "note/index.html.twig", "/Users/fayssal/Documents/site-to-take-notes/templates/note/index.html.twig");
    }
}
