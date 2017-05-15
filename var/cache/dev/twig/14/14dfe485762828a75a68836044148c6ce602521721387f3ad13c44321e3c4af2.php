<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_11a9aa5207848cfa5529e5877d033d599202ce5db8285cf4d41c1c3aeca6b710 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ffb00321c317c40bfbf7428202ea0255aaf0dbffbde6a065b043cfb28f402a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ffb00321c317c40bfbf7428202ea0255aaf0dbffbde6a065b043cfb28f402a4->enter($__internal_4ffb00321c317c40bfbf7428202ea0255aaf0dbffbde6a065b043cfb28f402a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_f3f49ad1407aed5f0b4b02367f0d606841a703b32dbb126fa55ecdf35a420878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3f49ad1407aed5f0b4b02367f0d606841a703b32dbb126fa55ecdf35a420878->enter($__internal_f3f49ad1407aed5f0b4b02367f0d606841a703b32dbb126fa55ecdf35a420878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ffb00321c317c40bfbf7428202ea0255aaf0dbffbde6a065b043cfb28f402a4->leave($__internal_4ffb00321c317c40bfbf7428202ea0255aaf0dbffbde6a065b043cfb28f402a4_prof);

        
        $__internal_f3f49ad1407aed5f0b4b02367f0d606841a703b32dbb126fa55ecdf35a420878->leave($__internal_f3f49ad1407aed5f0b4b02367f0d606841a703b32dbb126fa55ecdf35a420878_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_910d1a88baf57d7ceb012cde1159d2bcc09065dc38d662742d11f524a7acf6fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_910d1a88baf57d7ceb012cde1159d2bcc09065dc38d662742d11f524a7acf6fa->enter($__internal_910d1a88baf57d7ceb012cde1159d2bcc09065dc38d662742d11f524a7acf6fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_97fcb27ed3018be0f9cdf4f4140b14b670c00f36861bb1b2aa7707472967d1f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97fcb27ed3018be0f9cdf4f4140b14b670c00f36861bb1b2aa7707472967d1f0->enter($__internal_97fcb27ed3018be0f9cdf4f4140b14b670c00f36861bb1b2aa7707472967d1f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_97fcb27ed3018be0f9cdf4f4140b14b670c00f36861bb1b2aa7707472967d1f0->leave($__internal_97fcb27ed3018be0f9cdf4f4140b14b670c00f36861bb1b2aa7707472967d1f0_prof);

        
        $__internal_910d1a88baf57d7ceb012cde1159d2bcc09065dc38d662742d11f524a7acf6fa->leave($__internal_910d1a88baf57d7ceb012cde1159d2bcc09065dc38d662742d11f524a7acf6fa_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_c17c4820fe9e7b13ccfe538dad3bc8d11a465eb23e45e49078af6ffb8d6fc4eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c17c4820fe9e7b13ccfe538dad3bc8d11a465eb23e45e49078af6ffb8d6fc4eb->enter($__internal_c17c4820fe9e7b13ccfe538dad3bc8d11a465eb23e45e49078af6ffb8d6fc4eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c731b7ca3dcfb55278d43a796f4503393774305cbdcb25beec43e2c7d7f7e6a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c731b7ca3dcfb55278d43a796f4503393774305cbdcb25beec43e2c7d7f7e6a2->enter($__internal_c731b7ca3dcfb55278d43a796f4503393774305cbdcb25beec43e2c7d7f7e6a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c731b7ca3dcfb55278d43a796f4503393774305cbdcb25beec43e2c7d7f7e6a2->leave($__internal_c731b7ca3dcfb55278d43a796f4503393774305cbdcb25beec43e2c7d7f7e6a2_prof);

        
        $__internal_c17c4820fe9e7b13ccfe538dad3bc8d11a465eb23e45e49078af6ffb8d6fc4eb->leave($__internal_c17c4820fe9e7b13ccfe538dad3bc8d11a465eb23e45e49078af6ffb8d6fc4eb_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f630bd199be49c1ac379539346f57344e53391b3ec5b017a1b581b9601a9c77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f630bd199be49c1ac379539346f57344e53391b3ec5b017a1b581b9601a9c77->enter($__internal_8f630bd199be49c1ac379539346f57344e53391b3ec5b017a1b581b9601a9c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_653399cab3a507d2c41a81745ba12c2679a285745c3d757f775beeda4c07a788 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_653399cab3a507d2c41a81745ba12c2679a285745c3d757f775beeda4c07a788->enter($__internal_653399cab3a507d2c41a81745ba12c2679a285745c3d757f775beeda4c07a788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_653399cab3a507d2c41a81745ba12c2679a285745c3d757f775beeda4c07a788->leave($__internal_653399cab3a507d2c41a81745ba12c2679a285745c3d757f775beeda4c07a788_prof);

        
        $__internal_8f630bd199be49c1ac379539346f57344e53391b3ec5b017a1b581b9601a9c77->leave($__internal_8f630bd199be49c1ac379539346f57344e53391b3ec5b017a1b581b9601a9c77_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "D:\\WEB\\wamp64\\www\\HomeBlog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
