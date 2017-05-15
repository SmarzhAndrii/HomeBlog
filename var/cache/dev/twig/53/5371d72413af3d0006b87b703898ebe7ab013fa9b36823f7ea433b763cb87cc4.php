<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d1b1366034bbb21ae068b63aa0980f98d48b3e9fa416a297295a0fdc77208685 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_85d4189a4c69703468607c99616a4aa4271b62303eb1ced6b836ca3cf69f8bc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85d4189a4c69703468607c99616a4aa4271b62303eb1ced6b836ca3cf69f8bc1->enter($__internal_85d4189a4c69703468607c99616a4aa4271b62303eb1ced6b836ca3cf69f8bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_23ccd37a54a53646ab2bc6ea44bf7867ab146e875c1af2e456ad4fc7fe947e6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23ccd37a54a53646ab2bc6ea44bf7867ab146e875c1af2e456ad4fc7fe947e6b->enter($__internal_23ccd37a54a53646ab2bc6ea44bf7867ab146e875c1af2e456ad4fc7fe947e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85d4189a4c69703468607c99616a4aa4271b62303eb1ced6b836ca3cf69f8bc1->leave($__internal_85d4189a4c69703468607c99616a4aa4271b62303eb1ced6b836ca3cf69f8bc1_prof);

        
        $__internal_23ccd37a54a53646ab2bc6ea44bf7867ab146e875c1af2e456ad4fc7fe947e6b->leave($__internal_23ccd37a54a53646ab2bc6ea44bf7867ab146e875c1af2e456ad4fc7fe947e6b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_58024937486289479e89ecd2be290c4bdcfb5d09837dd70653d4f77a6647fd87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58024937486289479e89ecd2be290c4bdcfb5d09837dd70653d4f77a6647fd87->enter($__internal_58024937486289479e89ecd2be290c4bdcfb5d09837dd70653d4f77a6647fd87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2d18ab4c4bec6a82e571484200e1ba1dae132b3cbca425b0ade99536cd2ebbdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d18ab4c4bec6a82e571484200e1ba1dae132b3cbca425b0ade99536cd2ebbdc->enter($__internal_2d18ab4c4bec6a82e571484200e1ba1dae132b3cbca425b0ade99536cd2ebbdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2d18ab4c4bec6a82e571484200e1ba1dae132b3cbca425b0ade99536cd2ebbdc->leave($__internal_2d18ab4c4bec6a82e571484200e1ba1dae132b3cbca425b0ade99536cd2ebbdc_prof);

        
        $__internal_58024937486289479e89ecd2be290c4bdcfb5d09837dd70653d4f77a6647fd87->leave($__internal_58024937486289479e89ecd2be290c4bdcfb5d09837dd70653d4f77a6647fd87_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_14ff9368cb20edd52d944d9c75b360ff0bf00f6d3e08f4bcc005d66cf6e86e3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14ff9368cb20edd52d944d9c75b360ff0bf00f6d3e08f4bcc005d66cf6e86e3a->enter($__internal_14ff9368cb20edd52d944d9c75b360ff0bf00f6d3e08f4bcc005d66cf6e86e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_69b349ec69a9a276f45b9dd39d5d6f8cf1ea8bdc650f2aede46a5e002a8877a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69b349ec69a9a276f45b9dd39d5d6f8cf1ea8bdc650f2aede46a5e002a8877a2->enter($__internal_69b349ec69a9a276f45b9dd39d5d6f8cf1ea8bdc650f2aede46a5e002a8877a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_69b349ec69a9a276f45b9dd39d5d6f8cf1ea8bdc650f2aede46a5e002a8877a2->leave($__internal_69b349ec69a9a276f45b9dd39d5d6f8cf1ea8bdc650f2aede46a5e002a8877a2_prof);

        
        $__internal_14ff9368cb20edd52d944d9c75b360ff0bf00f6d3e08f4bcc005d66cf6e86e3a->leave($__internal_14ff9368cb20edd52d944d9c75b360ff0bf00f6d3e08f4bcc005d66cf6e86e3a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_07a5944f55f8c23009981817fc3f39dad868185f3dbc96d1a95198e471902788 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07a5944f55f8c23009981817fc3f39dad868185f3dbc96d1a95198e471902788->enter($__internal_07a5944f55f8c23009981817fc3f39dad868185f3dbc96d1a95198e471902788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7f94fc1fba1c56ee6dc108992a78fd1b511b4987c8beee3663cd511892611681 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f94fc1fba1c56ee6dc108992a78fd1b511b4987c8beee3663cd511892611681->enter($__internal_7f94fc1fba1c56ee6dc108992a78fd1b511b4987c8beee3663cd511892611681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7f94fc1fba1c56ee6dc108992a78fd1b511b4987c8beee3663cd511892611681->leave($__internal_7f94fc1fba1c56ee6dc108992a78fd1b511b4987c8beee3663cd511892611681_prof);

        
        $__internal_07a5944f55f8c23009981817fc3f39dad868185f3dbc96d1a95198e471902788->leave($__internal_07a5944f55f8c23009981817fc3f39dad868185f3dbc96d1a95198e471902788_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "D:\\WEB\\wamp64\\www\\HomeBlog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
