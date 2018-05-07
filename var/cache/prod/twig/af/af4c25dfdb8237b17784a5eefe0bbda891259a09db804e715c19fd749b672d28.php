<?php

/* accueil/accueil.html.twig */
class __TwigTemplate_173628253a4814cd138b0ebdfaba72facd4b17e6adaa3f0ec9c28002de7c0e4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "accueil/accueil.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylsheet' => array($this, 'block_stylsheet'),
            'header' => array($this, 'block_header'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayBlock('stylsheet', $context, $blocks);
        // line 8
        echo "
    ";
        // line 9
        $this->displayBlock('header', $context, $blocks);
        // line 12
        echo "            ";
        // line 13
        echo "    ";
        $this->displayBlock('main', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('footer', $context, $blocks);
        // line 28
        echo "
    ";
        // line 29
        $this->displayBlock('javascripts', $context, $blocks);
        // line 32
        echo "
";
    }

    // line 3
    public function block_stylsheet($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("stylsheet", $context, $blocks);
        echo "
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/styleAccueil.css"), "html", null, true);
        echo "\">

    ";
    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        // line 10
        echo "        ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
    ";
    }

    // line 13
    public function block_main($context, array $blocks = array())
    {
        // line 14
        echo "        <div class=\"container1\">
            <div class=\"jumbotron jumbotron-fluid\">
                <div class=\"container2\">
                    <h1 class=\"display-4\">GsbFrais</h1>
                    <hr>
                    <p class=\"lead\">Cette application est déstinée aux visiteurs médicaux et au personnel du service comptable.</p>
                </div>
            </div>
        </div>
    ";
    }

    // line 25
    public function block_footer($context, array $blocks = array())
    {
        // line 26
        echo "        ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
    ";
    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        // line 30
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "accueil/accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 30,  115 => 29,  108 => 26,  105 => 25,  92 => 14,  89 => 13,  82 => 10,  79 => 9,  72 => 5,  67 => 4,  64 => 3,  59 => 32,  57 => 29,  54 => 28,  52 => 25,  49 => 24,  46 => 13,  44 => 12,  42 => 9,  39 => 8,  36 => 3,  33 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "accueil/accueil.html.twig", "/var/www/html/GsbFrais/app/Resources/views/accueil/accueil.html.twig");
    }
}
