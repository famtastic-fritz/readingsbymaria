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

/* modules/contrib/moderation_dashboard/templates/moderation-dashboard.html.twig */
class __TwigTemplate_25276b5a31c12176c9959564b18015dcc107d70e26ef430b4cf939e361a394ae extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 2];
        $filters = ["escape" => 4];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
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
        echo "<div class=\"moderation-dashboard\">
  ";
        // line 2
        if ($this->getAttribute(($context["content"] ?? null), "left", [])) {
            // line 3
            echo "    <div class=\"moderation-dashboard-region\">
      ";
            // line 4
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "left", [])), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 7
        echo "  ";
        if ($this->getAttribute(($context["content"] ?? null), "middle", [])) {
            // line 8
            echo "    <div class=\"moderation-dashboard-region\">
      ";
            // line 9
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "middle", [])), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 12
        echo "  ";
        if ($this->getAttribute(($context["content"] ?? null), "right", [])) {
            // line 13
            echo "    <div class=\"moderation-dashboard-region\">
      ";
            // line 14
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "right", [])), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 17
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/moderation_dashboard/templates/moderation-dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 17,  87 => 14,  84 => 13,  81 => 12,  75 => 9,  72 => 8,  69 => 7,  63 => 4,  60 => 3,  58 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/moderation_dashboard/templates/moderation-dashboard.html.twig", "/Users/FAMtastic/Sites/devdesktop/readingsbymaria/modules/contrib/moderation_dashboard/templates/moderation-dashboard.html.twig");
    }
}
