<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modular.html.twig */
class __TwigTemplate_c9f4c045c56e98eb65cbcc2452058e0bf443e81bf7a1774a207a865d5c4083a2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "modular.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "background_image", []) != "")) {
            // line 5
            echo "    ";
            $context["background_html"] = (("style=\"background-image: url(" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "background_image", []), [], "array"), "url", [])) . ");\"");
        } else {
            // line 7
            echo "    ";
            $context["background_html"] = "";
        }
        // line 9
        echo "<section class=\"single-page-title\"";
        echo twig_escape_filter($this->env, ($context["background_html"] ?? null), "html", null, true);
        echo ">
    <div class=\"container text-center\">
        <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
        echo "</h2>
    </div>
</section>

";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "content", []), "html", null, true);
        echo "
";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 17
            echo "    ";
            echo $this->getAttribute($context["module"], "content", []);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "modular.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 17,  69 => 16,  65 => 15,  58 => 11,  52 => 9,  48 => 7,  44 => 5,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% block content %}
{% if page.header.background_image != '' %}
    {% set background_html = 'style=\"background-image: url(' ~ page.media.images[page.header.background_image].url ~ ');\"' %}
{% else %}
    {% set  background_html = \"\" %}
{% endif %}
<section class=\"single-page-title\"{{ background_html }}>
    <div class=\"container text-center\">
        <h2>{{ page.title }}</h2>
    </div>
</section>

{{ page.content }}
{% for module in page.collection() %}
    {{ module.content|raw }}
{% endfor %}
{% endblock %}
", "modular.html.twig", "D:\\Workspace\\Grav CMS\\grav-skeleton-onepage-site+admin-2.0.0\\user\\themes\\x-corporation\\templates\\modular.html.twig");
    }
}
