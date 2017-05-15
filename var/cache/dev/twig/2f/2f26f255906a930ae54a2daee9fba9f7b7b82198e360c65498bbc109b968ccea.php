<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_bc986aaac5035fdb46e4469a7c26d94eb0a76c6d22643d6554e812fff43401b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dfbd55fbcdbb12a0a44cae89a1a5a6786b729801d048f400d33bc887ac94bb13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfbd55fbcdbb12a0a44cae89a1a5a6786b729801d048f400d33bc887ac94bb13->enter($__internal_dfbd55fbcdbb12a0a44cae89a1a5a6786b729801d048f400d33bc887ac94bb13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_a07da12480dbc6eb9c88dab13a2958844a6bac07b6ccc9bb97735efcc4244cc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a07da12480dbc6eb9c88dab13a2958844a6bac07b6ccc9bb97735efcc4244cc1->enter($__internal_a07da12480dbc6eb9c88dab13a2958844a6bac07b6ccc9bb97735efcc4244cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfbd55fbcdbb12a0a44cae89a1a5a6786b729801d048f400d33bc887ac94bb13->leave($__internal_dfbd55fbcdbb12a0a44cae89a1a5a6786b729801d048f400d33bc887ac94bb13_prof);

        
        $__internal_a07da12480dbc6eb9c88dab13a2958844a6bac07b6ccc9bb97735efcc4244cc1->leave($__internal_a07da12480dbc6eb9c88dab13a2958844a6bac07b6ccc9bb97735efcc4244cc1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_51d4df2e3fbe9f869369dad7ff40d9ab67534ea7579660eaf343db32059bedde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51d4df2e3fbe9f869369dad7ff40d9ab67534ea7579660eaf343db32059bedde->enter($__internal_51d4df2e3fbe9f869369dad7ff40d9ab67534ea7579660eaf343db32059bedde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f8b5f02f29ef07363cd1e28160d74d4dc2afb36b3038607bf34c2e82bb043818 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8b5f02f29ef07363cd1e28160d74d4dc2afb36b3038607bf34c2e82bb043818->enter($__internal_f8b5f02f29ef07363cd1e28160d74d4dc2afb36b3038607bf34c2e82bb043818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_f8b5f02f29ef07363cd1e28160d74d4dc2afb36b3038607bf34c2e82bb043818->leave($__internal_f8b5f02f29ef07363cd1e28160d74d4dc2afb36b3038607bf34c2e82bb043818_prof);

        
        $__internal_51d4df2e3fbe9f869369dad7ff40d9ab67534ea7579660eaf343db32059bedde->leave($__internal_51d4df2e3fbe9f869369dad7ff40d9ab67534ea7579660eaf343db32059bedde_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_eba90db34eb320a65d2aebe6c69d20e032457b3c923fb367fc640b3cf8f3d66a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eba90db34eb320a65d2aebe6c69d20e032457b3c923fb367fc640b3cf8f3d66a->enter($__internal_eba90db34eb320a65d2aebe6c69d20e032457b3c923fb367fc640b3cf8f3d66a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3d8a6737b1a56182a65872e3d48412b9a68de6de59b69297f5a7ba6c15621cff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d8a6737b1a56182a65872e3d48412b9a68de6de59b69297f5a7ba6c15621cff->enter($__internal_3d8a6737b1a56182a65872e3d48412b9a68de6de59b69297f5a7ba6c15621cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_3d8a6737b1a56182a65872e3d48412b9a68de6de59b69297f5a7ba6c15621cff->leave($__internal_3d8a6737b1a56182a65872e3d48412b9a68de6de59b69297f5a7ba6c15621cff_prof);

        
        $__internal_eba90db34eb320a65d2aebe6c69d20e032457b3c923fb367fc640b3cf8f3d66a->leave($__internal_eba90db34eb320a65d2aebe6c69d20e032457b3c923fb367fc640b3cf8f3d66a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cff7bdb211f56ae449fd721c47acdb27b4b6f6b2c215c0e4bc942606906eaed1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cff7bdb211f56ae449fd721c47acdb27b4b6f6b2c215c0e4bc942606906eaed1->enter($__internal_cff7bdb211f56ae449fd721c47acdb27b4b6f6b2c215c0e4bc942606906eaed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0c94a292c5d19f41a0c5e8006ebe017b7262a40799e84a6971f4d9f67639f285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c94a292c5d19f41a0c5e8006ebe017b7262a40799e84a6971f4d9f67639f285->enter($__internal_0c94a292c5d19f41a0c5e8006ebe017b7262a40799e84a6971f4d9f67639f285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_0c94a292c5d19f41a0c5e8006ebe017b7262a40799e84a6971f4d9f67639f285->leave($__internal_0c94a292c5d19f41a0c5e8006ebe017b7262a40799e84a6971f4d9f67639f285_prof);

        
        $__internal_cff7bdb211f56ae449fd721c47acdb27b4b6f6b2c215c0e4bc942606906eaed1->leave($__internal_cff7bdb211f56ae449fd721c47acdb27b4b6f6b2c215c0e4bc942606906eaed1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "D:\\WEB\\wamp64\\www\\HomeBlog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
