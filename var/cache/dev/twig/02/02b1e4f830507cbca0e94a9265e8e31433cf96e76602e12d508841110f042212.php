<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_cb27ba34ee8fad19bde9b64259d0471460b2571606f26e32a164c9b01153d2ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4aae0b4da0e4b2c4185e5b266fe268b1c3b4e70ed07b7df96c25590753978014 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4aae0b4da0e4b2c4185e5b266fe268b1c3b4e70ed07b7df96c25590753978014->enter($__internal_4aae0b4da0e4b2c4185e5b266fe268b1c3b4e70ed07b7df96c25590753978014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_0f373fc8345db1e0cd8e4f5ad4e4615fc1f6525655cd0d488327dfec16a173de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f373fc8345db1e0cd8e4f5ad4e4615fc1f6525655cd0d488327dfec16a173de->enter($__internal_0f373fc8345db1e0cd8e4f5ad4e4615fc1f6525655cd0d488327dfec16a173de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4aae0b4da0e4b2c4185e5b266fe268b1c3b4e70ed07b7df96c25590753978014->leave($__internal_4aae0b4da0e4b2c4185e5b266fe268b1c3b4e70ed07b7df96c25590753978014_prof);

        
        $__internal_0f373fc8345db1e0cd8e4f5ad4e4615fc1f6525655cd0d488327dfec16a173de->leave($__internal_0f373fc8345db1e0cd8e4f5ad4e4615fc1f6525655cd0d488327dfec16a173de_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_12a90e82855ca04fe8aabe7fe01cfe8a3f799e2efef973f687f9c789c5846f83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12a90e82855ca04fe8aabe7fe01cfe8a3f799e2efef973f687f9c789c5846f83->enter($__internal_12a90e82855ca04fe8aabe7fe01cfe8a3f799e2efef973f687f9c789c5846f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ab1b7779b2b05b66ed270b3d60ddf26cf00eb671f6951d652abad416e4032081 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab1b7779b2b05b66ed270b3d60ddf26cf00eb671f6951d652abad416e4032081->enter($__internal_ab1b7779b2b05b66ed270b3d60ddf26cf00eb671f6951d652abad416e4032081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_ab1b7779b2b05b66ed270b3d60ddf26cf00eb671f6951d652abad416e4032081->leave($__internal_ab1b7779b2b05b66ed270b3d60ddf26cf00eb671f6951d652abad416e4032081_prof);

        
        $__internal_12a90e82855ca04fe8aabe7fe01cfe8a3f799e2efef973f687f9c789c5846f83->leave($__internal_12a90e82855ca04fe8aabe7fe01cfe8a3f799e2efef973f687f9c789c5846f83_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "D:\\WEB\\wamp64\\www\\HomeBlog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
