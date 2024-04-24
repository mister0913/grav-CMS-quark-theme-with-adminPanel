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

/* modular/features.html.twig */
class __TwigTemplate_6fb887ced79978f3ab590074bb40ed6def831193c6e131d72ab7565cfe2e6d5c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<section class=\"x-features\">
    <section class=\"section-title\">
        <div class=\"container text-center\">
            <h2>";
        // line 4
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</h2>
            <span class=\"bordered-icon\"><i class=\"fa fa-circle-thin\"></i></span>
        </div>
    </section>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6 img-left\">
                ";
        // line 11
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "image", []) != "")) {
            // line 12
            echo "                ";
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "image", []), [], "array"), "html", [], "method");
            echo "
                ";
        }
        // line 14
        echo "            </div>
            <div class=\"col-md-6\">
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "features", []));
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 17
            echo "                <div class=\"promo-block-wrapper clearfix\">
                    <div class=\"promo-icon\">
                        ";
            // line 19
            if (($this->getAttribute($context["feature"], "icon", []) != "")) {
                // line 20
                echo "                        <i class=\"fa ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["feature"], "icon", []), "html", null, true);
                echo "\"></i>
                        ";
            }
            // line 22
            echo "                    </div>
                    <div class=\"promo-content\">
                        <h3>";
            // line 24
            echo $this->getAttribute($context["feature"], "title", []);
            echo "</h3>

                        <p>";
            // line 26
            echo $this->getAttribute($context["feature"], "description", []);
            echo "</p>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            </div>
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/features.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 30,  82 => 26,  77 => 24,  73 => 22,  67 => 20,  65 => 19,  61 => 17,  57 => 16,  53 => 14,  47 => 12,  45 => 11,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"x-features\">
    <section class=\"section-title\">
        <div class=\"container text-center\">
            <h2>{{ page.title|raw }}</h2>
            <span class=\"bordered-icon\"><i class=\"fa fa-circle-thin\"></i></span>
        </div>
    </section>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6 img-left\">
                {% if page.header.image != '' %}
                {{ page.media.images[page.header.image].html()|raw }}
                {% endif %}
            </div>
            <div class=\"col-md-6\">
                {% for feature in page.header.features %}
                <div class=\"promo-block-wrapper clearfix\">
                    <div class=\"promo-icon\">
                        {% if feature.icon != '' %}
                        <i class=\"fa {{ feature.icon }}\"></i>
                        {% endif %}
                    </div>
                    <div class=\"promo-content\">
                        <h3>{{ feature.title|raw }}</h3>

                        <p>{{ feature.description|raw }}</p>
                    </div>
                </div>
                {% endfor %}
            </div>
        </div>
    </div>
</section>
", "modular/features.html.twig", "D:\\Workspace\\Grav CMS\\grav-skeleton-onepage-site+admin-2.0.0\\user\\themes\\x-corporation\\templates\\modular\\features.html.twig");
    }
}
