<?php

/* profil/gestionCompte.html.twig */
class __TwigTemplate_c854e0856cf3bf821aa8a56f1a24d93114da9ffef319b254212888f5dc18eeb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("profil/profil.html.twig", "profil/gestionCompte.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylsheet' => array($this, 'block_stylsheet'),
            'header' => array($this, 'block_header'),
            'main' => array($this, 'block_main'),
            'menu' => array($this, 'block_menu'),
            'contenu' => array($this, 'block_contenu'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "profil/profil.html.twig";
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
        // line 7
        echo "
    ";
        // line 8
        $this->displayBlock('header', $context, $blocks);
        // line 11
        echo "    ";
        $this->displayBlock('main', $context, $blocks);
        // line 127
        echo "
    ";
        // line 128
        $this->displayBlock('footer', $context, $blocks);
        // line 131
        echo "
    ";
        // line 132
        $this->displayBlock('javascripts', $context, $blocks);
        // line 135
        echo "
";
    }

    // line 3
    public function block_stylsheet($context, array $blocks = array())
    {
        // line 4
        echo "        ";
        $this->displayParentBlock("stylsheet", $context, $blocks);
        echo "
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/styleGestionCompte.css"), "html", null, true);
        echo "\">
    ";
    }

    // line 8
    public function block_header($context, array $blocks = array())
    {
        // line 9
        echo "        ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
    ";
    }

    // line 11
    public function block_main($context, array $blocks = array())
    {
        // line 12
        echo "        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-sm-4 col-md-3\">
                    ";
        // line 16
        echo "                    ";
        $this->displayBlock('menu', $context, $blocks);
        // line 59
        echo "                </div>



                <div class=\"col-sm-9\">
                    ";
        // line 64
        $this->displayBlock('contenu', $context, $blocks);
        // line 119
        echo "                </div>




            </div>
        </div>
    ";
    }

    // line 16
    public function block_menu($context, array $blocks = array())
    {
        // line 17
        echo "                        <div class=\"container-fluid\">
                            <div class ='row'>
                                <nav class=\"col-sm hidden-xs-down bg-faded sidebar\">
                                    <div id=\"navLateral\">
                                        <ul class=\"nav nav-pills flex-column\">
                                            <li class=\"nav-item\" >
                                                <a class=\"nav-link\" href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_profil_homepage");
        echo "\">Menu<i class=\"fab fa-elementor\"></i></a>
                                            </li>
                                        </ul>
                                        <hr>

                                        <ul class=\"nav nav-pills flex-column\">
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_profil_saisie_frais");
        echo "\">Saisie des frais<i class=\"far fa-edit\"></i></a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_profil_afficher_mois");
        echo "\">Fiche du mois <i class=\"fas fa-book\"></i></a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_profil_historique");
        echo "\">Historique<i class=\"fas fa-history\"></i></a>
                                            </li>
                                        </ul>

                                        <hr>

                                        <ul class=\"nav nav-pills flex-column\">

                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_frais_edit_mdp");
        echo "\">Changer de mot de passe <i class=\"fas fa-key\"></i></a>
                                            </li>

                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_frais_accueil_deco");
        echo "\">Se déconnecter <i class=\"fas fa-power-off\"></i></a>

                                            </li>
                                        </ul>

                                    </div>
                                </nav>
                            </div>
                        </div>
                    ";
    }

    // line 64
    public function block_contenu($context, array $blocks = array())
    {
        // line 65
        echo "                        <div class=\"container1\">
                            <div class=\"jumbotron jumbotron-fluid\">
                                <div class=\"container2\">
                                    <div class=\"container\">
                                        <h1>Gestionnaire de compte</h1><br>
                                        <div class=\"container-fluid\">
                                            ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
                                                <div class=\"form-group\">
                                                    <div class=\"row\">
                                                        <div class=\"col\">
                                                            ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nom", array()), 'row');
        echo "
                                                        </div>
                                                        <div class=\"col\">
                                                            ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "prenom", array()), 'row');
        echo "
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class=\"form-group\">
                                                    ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "adresse", array()), 'row');
        echo "
                                                </div>

                                                <div class=\"form-group\">
                                                    <div class=\"row\">
                                                        <div class=\"col\">
                                                            ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cp", array()), 'row');
        echo "
                                                        </div>
                                                        <div class=\"col\">
                                                            ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "ville", array()), 'row');
        echo "
                                                        </div>
                                                    </div>
                                                </div>

                                                <br>
                                                <div id=\"divSave\">
                                                    <div class=\"row\">
                                                        <div class=\"col btn\">
                                                            ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "save", array()), 'row');
        echo "
                                                        </div>
                                                        <div class=\"col btn\">
                                                            ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cancel", array()), 'row');
        echo "
                                                        </div>
                                                        <div class=\"col btn\">
                                                            <a class=\"btn btn-outline-success\" href=\"";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_frais_edit_mdp");
        echo "\"> Mot de passe </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            ";
        // line 112
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
    }

    // line 128
    public function block_footer($context, array $blocks = array())
    {
        // line 129
        echo "        ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
    ";
    }

    // line 132
    public function block_javascripts($context, array $blocks = array())
    {
        // line 133
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "profil/gestionCompte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 133,  285 => 132,  278 => 129,  275 => 128,  264 => 112,  257 => 108,  251 => 105,  245 => 102,  233 => 93,  227 => 90,  218 => 84,  209 => 78,  203 => 75,  196 => 71,  188 => 65,  185 => 64,  171 => 49,  164 => 45,  152 => 36,  146 => 33,  140 => 30,  130 => 23,  122 => 17,  119 => 16,  108 => 119,  106 => 64,  99 => 59,  96 => 16,  91 => 12,  88 => 11,  81 => 9,  78 => 8,  72 => 5,  67 => 4,  64 => 3,  59 => 135,  57 => 132,  54 => 131,  52 => 128,  49 => 127,  46 => 11,  44 => 8,  41 => 7,  38 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profil/gestionCompte.html.twig", "/var/www/html/GsbFrais/app/Resources/views/profil/gestionCompte.html.twig");
    }
}
