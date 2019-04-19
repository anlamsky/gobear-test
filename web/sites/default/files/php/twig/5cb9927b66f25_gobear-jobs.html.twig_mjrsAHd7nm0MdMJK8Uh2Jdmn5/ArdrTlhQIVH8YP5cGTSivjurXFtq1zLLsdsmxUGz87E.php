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

/* modules/custom/gobear_jobs/templates/gobear-jobs.html.twig */
class __TwigTemplate_ea6865a18a29aa11ca84725c2088146255c88da5d8ecc4d863385c7e3aea8339 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 3];
        $filters = ["raw" => 16];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['raw'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!-- Add you custom twig html here -->
<div class=\"container py-3 mt-3\">
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["content"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 4
            echo "  <div class=\"row\">
    <div  class=\"col-xs-12\" style=\"border: solid 1px #CCC; padding: 10px; margin-bottom: 15px;\">
        <div class=\"col-md-8\">
            <h4>";
            // line 7
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [], "array")), "html", null, true);
            echo "</h4> 
            <p><span class=\"text-primary font-weight-bold\">@ ";
            // line 8
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "company", [], "array")), "html", null, true);
            echo "</span> | <span>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "location", [], "array")), "html", null, true);
            echo "</span></p> 
            <p>Published ";
            // line 9
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "created_at", [], "array")), "html", null, true);
            echo "</p>
            <p>
                <a data-toggle=\"collapse\" href=\"#collapseExample-";
            // line 11
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "id", [], "array")), "html", null, true);
            echo "\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseExample-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "id", [], "array")), "html", null, true);
            echo "\">
                    More info >
                </a>
                <div class=\"collapse\" id=\"collapseExample-";
            // line 14
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "id", [], "array")), "html", null, true);
            echo "\">
                    <div class=\"card card-body\">
                        ";
            // line 16
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "description", [], "array")));
            echo "
                    </div>
                </div
            </p>
        </div>
        <div class=\"col-md-4 align-middle\">
        <a href=\"#\" class=\"btn btn-primary btn-lg active btn-success pull-right\" role=\"button\" aria-pressed=\"true\">";
            // line 22
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "type", [], "array")), "html", null, true);
            echo "</a>
        </div>
    </div>
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "modules/custom/gobear_jobs/templates/gobear-jobs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 27,  105 => 22,  96 => 16,  91 => 14,  83 => 11,  78 => 9,  72 => 8,  68 => 7,  63 => 4,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/gobear_jobs/templates/gobear-jobs.html.twig", "/var/www/drupal/gobear_test/web/modules/custom/gobear_jobs/templates/gobear-jobs.html.twig");
    }
}
