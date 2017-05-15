<?php

/* HomeBlogAdminBundle:Article:edit.html.twig */
class __TwigTemplate_6033c5a094fd1c8b94abfdce61515d93108dc6560f41d6503a817e1c7a9127c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@HomeBlogAdmin/layout.html.twig", "HomeBlogAdminBundle:Article:edit.html.twig", 1);
        $this->blocks = array(
            'edit' => array($this, 'block_edit'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@HomeBlogAdmin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fbd9027a038e695d8e8383c482e29fdb86658c1de5e1722701a1d9ee546a0f06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbd9027a038e695d8e8383c482e29fdb86658c1de5e1722701a1d9ee546a0f06->enter($__internal_fbd9027a038e695d8e8383c482e29fdb86658c1de5e1722701a1d9ee546a0f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HomeBlogAdminBundle:Article:edit.html.twig"));

        $__internal_1b705cfdd0cee2ff7b3f0df1e079108ecacf794041ebd7eac02e26d42181ba18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b705cfdd0cee2ff7b3f0df1e079108ecacf794041ebd7eac02e26d42181ba18->enter($__internal_1b705cfdd0cee2ff7b3f0df1e079108ecacf794041ebd7eac02e26d42181ba18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HomeBlogAdminBundle:Article:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbd9027a038e695d8e8383c482e29fdb86658c1de5e1722701a1d9ee546a0f06->leave($__internal_fbd9027a038e695d8e8383c482e29fdb86658c1de5e1722701a1d9ee546a0f06_prof);

        
        $__internal_1b705cfdd0cee2ff7b3f0df1e079108ecacf794041ebd7eac02e26d42181ba18->leave($__internal_1b705cfdd0cee2ff7b3f0df1e079108ecacf794041ebd7eac02e26d42181ba18_prof);

    }

    // line 3
    public function block_edit($context, array $blocks = array())
    {
        $__internal_4769afe4e832fa3cbc120b18dc196040894223269ee28bcbb7de52ce2a3ab616 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4769afe4e832fa3cbc120b18dc196040894223269ee28bcbb7de52ce2a3ab616->enter($__internal_4769afe4e832fa3cbc120b18dc196040894223269ee28bcbb7de52ce2a3ab616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "edit"));

        $__internal_3e83d0e94136bcb0b9a2e3f26cbfc97a3e380a2532c61163e5b9e3a338e2305d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e83d0e94136bcb0b9a2e3f26cbfc97a3e380a2532c61163e5b9e3a338e2305d->enter($__internal_3e83d0e94136bcb0b9a2e3f26cbfc97a3e380a2532c61163e5b9e3a338e2305d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "edit"));

        // line 4
        echo "    <h5 class=\"mb-20\">Редактирование</h5>
    <form method=\"post\" >
        ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" />
    </form>
";
        
        $__internal_3e83d0e94136bcb0b9a2e3f26cbfc97a3e380a2532c61163e5b9e3a338e2305d->leave($__internal_3e83d0e94136bcb0b9a2e3f26cbfc97a3e380a2532c61163e5b9e3a338e2305d_prof);

        
        $__internal_4769afe4e832fa3cbc120b18dc196040894223269ee28bcbb7de52ce2a3ab616->leave($__internal_4769afe4e832fa3cbc120b18dc196040894223269ee28bcbb7de52ce2a3ab616_prof);

    }

    public function getTemplateName()
    {
        return "HomeBlogAdminBundle:Article:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@HomeBlogAdmin/layout.html.twig\" %}

{% block edit %}
    <h5 class=\"mb-20\">Редактирование</h5>
    <form method=\"post\" >
        {{ form_widget(form) }}
        <input type=\"submit\" />
    </form>
{% endblock %}", "HomeBlogAdminBundle:Article:edit.html.twig", "D:\\WEB\\wamp64\\www\\HomeBlog\\src\\HomeBlog\\AdminBundle/Resources/views/Article/edit.html.twig");
    }
}
