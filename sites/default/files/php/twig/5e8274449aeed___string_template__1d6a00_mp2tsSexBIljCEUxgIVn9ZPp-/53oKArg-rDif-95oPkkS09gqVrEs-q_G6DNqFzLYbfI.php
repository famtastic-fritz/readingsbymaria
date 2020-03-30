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

/* __string_template__1d6a00d71887310549711b2647ecf43eeed5ec3a6ddcdada04bf4df7b361dc0a */
class __TwigTemplate_2ac30b15bb5be39a39c33d08189a25ade45c53ebc125d14cfbb162881ebbd7cd extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 1];
        $filters = ["t" => 1];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t'],
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
        if (($this->getAttribute(($context["raw_arguments"] ?? null), "uid", []) == $this->getAttribute(($context["raw_arguments"] ?? null), "null", []))) {
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Content you created"));
        } else {
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Content created by user"));
        }
    }

    public function getTemplateName()
    {
        return "__string_template__1d6a00d71887310549711b2647ecf43eeed5ec3a6ddcdada04bf4df7b361dc0a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__1d6a00d71887310549711b2647ecf43eeed5ec3a6ddcdada04bf4df7b361dc0a", "");
    }
}
