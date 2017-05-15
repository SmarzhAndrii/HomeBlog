<?php

/* HomeBlogAdminBundle:Default:index.html.twig */
class __TwigTemplate_50821655a42cea0a3846ac71c93969395c479b9e4d474f598fe511274f18acb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@HomeBlogDefault/layout.html.twig", "HomeBlogAdminBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'ok' => array($this, 'block_ok'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@HomeBlogDefault/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_84bcc56fb1b309a95b714ef7c880f298dac4c1f67e3ba67d0d1361761dd7d650 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84bcc56fb1b309a95b714ef7c880f298dac4c1f67e3ba67d0d1361761dd7d650->enter($__internal_84bcc56fb1b309a95b714ef7c880f298dac4c1f67e3ba67d0d1361761dd7d650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HomeBlogAdminBundle:Default:index.html.twig"));

        $__internal_24c7a46bf6fb3a182d0d4148118702cda99cfcb67608786b1f746f3f68ddb618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24c7a46bf6fb3a182d0d4148118702cda99cfcb67608786b1f746f3f68ddb618->enter($__internal_24c7a46bf6fb3a182d0d4148118702cda99cfcb67608786b1f746f3f68ddb618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HomeBlogAdminBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84bcc56fb1b309a95b714ef7c880f298dac4c1f67e3ba67d0d1361761dd7d650->leave($__internal_84bcc56fb1b309a95b714ef7c880f298dac4c1f67e3ba67d0d1361761dd7d650_prof);

        
        $__internal_24c7a46bf6fb3a182d0d4148118702cda99cfcb67608786b1f746f3f68ddb618->leave($__internal_24c7a46bf6fb3a182d0d4148118702cda99cfcb67608786b1f746f3f68ddb618_prof);

    }

    // line 3
    public function block_ok($context, array $blocks = array())
    {
        $__internal_7f97f8ffa3b765eb7033cdf7f942f247073ba1a053783d54ae06f4fd14768c22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f97f8ffa3b765eb7033cdf7f942f247073ba1a053783d54ae06f4fd14768c22->enter($__internal_7f97f8ffa3b765eb7033cdf7f942f247073ba1a053783d54ae06f4fd14768c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ok"));

        $__internal_4ec23bc567355c52cff10ec1af007408b487030d21733b6b8c69bc396b17b341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ec23bc567355c52cff10ec1af007408b487030d21733b6b8c69bc396b17b341->enter($__internal_4ec23bc567355c52cff10ec1af007408b487030d21733b6b8c69bc396b17b341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ok"));

        
        $__internal_4ec23bc567355c52cff10ec1af007408b487030d21733b6b8c69bc396b17b341->leave($__internal_4ec23bc567355c52cff10ec1af007408b487030d21733b6b8c69bc396b17b341_prof);

        
        $__internal_7f97f8ffa3b765eb7033cdf7f942f247073ba1a053783d54ae06f4fd14768c22->leave($__internal_7f97f8ffa3b765eb7033cdf7f942f247073ba1a053783d54ae06f4fd14768c22_prof);

    }

    public function getTemplateName()
    {
        return "HomeBlogAdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@HomeBlogDefault/layout.html.twig\" %}

{% block ok %}
{% endblock %}
", "HomeBlogAdminBundle:Default:index.html.twig", "D:\\WEB\\wamp64\\www\\HomeBlog\\src\\HomeBlog\\AdminBundle/Resources/views/Default/index.html.twig");
    }
}
