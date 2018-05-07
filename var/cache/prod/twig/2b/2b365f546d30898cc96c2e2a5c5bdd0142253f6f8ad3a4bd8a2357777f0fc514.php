<?php

/* profil/gestionMdp.html.twig */
class __TwigTemplate_e0040729369fb8ad229d9882b4bdb05e416b77994a776735051e49860c6f87c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("profil/profil.html.twig", "profil/gestionMdp.html.twig", 1);
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
        // line 137
        echo "
    ";
        // line 138
        $this->displayBlock('footer', $context, $blocks);
        // line 141
        echo "
    ";
        // line 142
        $this->displayBlock('javascripts', $context, $blocks);
        // line 145
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
        // line 15
        $this->displayBlock('menu', $context, $blocks);
        // line 58
        echo "                </div>



                <div class=\"col-sm-9\">
                    ";
        // line 63
        $this->displayBlock('contenu', $context, $blocks);
        // line 129
        echo "                </div>




            </div>
        </div>
    ";
    }

    // line 15
    public function block_menu($context, array $blocks = array())
    {
        // line 16
        echo "                        <div class=\"container-fluid\">
                            <div class ='row'>
                                <nav class=\"col-sm hidden-xs-down bg-faded sidebar\">
                                    <div id=\"navLateral\">
                                        <ul class=\"nav nav-pills flex-column\">
                                            <li class=\"nav-item\" >
                                                <a class=\"nav-link\" href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_profil_homepage");
        echo "\">Menu<i class=\"fab fa-elementor\"></i></a>
                                            </li>
                                        </ul>
                                        <hr>

                                        <ul class=\"nav nav-pills flex-column\">
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_profil_saisie_frais");
        echo "\">Saisie des frais<i class=\"far fa-edit\"></i></a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_profil_afficher_mois");
        echo "\">Fiche du mois <i class=\"fas fa-book\"></i></a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_profil_historique");
        echo "\">Historique<i class=\"fas fa-history\"></i></a>
                                            </li>
                                        </ul>

                                        <hr>

                                        <ul class=\"nav nav-pills flex-column\">

                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_frais_edit_mdp");
        echo "\">Changer de mot de passe <i class=\"fas fa-key\"></i></a>
                                            </li>

                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" href=\"";
        // line 48
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

    // line 63
    public function block_contenu($context, array $blocks = array())
    {
        // line 64
        echo "                        ";
        if ((($context["oldMdpInvalid"] ?? null) == true)) {
            // line 65
            echo "                            <div class=\"jumbotron jumbotron-fluid\" style=\"padding: 2rem 3rem; margin-top: 1rem\">
                                <div class=\"container contAlign\">

                                    <table class=\"table\">
                                        <tr class=\"table-danger\" >
                                            <td ><h4> Mot de passe actuel incorrect ! </h4></td>
                                        </tr>
                                    </table>

                                </div>
                            </div>

                        ";
        } elseif ((        // line 77
($context["newMdpDontMatch"] ?? null) == true)) {
            // line 78
            echo "                            <div class=\"jumbotron jumbotron-fluid\" style=\"padding: 2rem 3rem; margin-top: 1rem\">
                                <div class=\"container contAlign\">

                                    <table class=\"table\">
                                        <tr class=\"table-danger\" >
                                            <td ><h4> Les champs du nouveau mot de passe sont différents ! </h4></td>
                                        </tr>
                                    </table>

                                </div>
                            </div>
                        ";
        }
        // line 90
        echo "                        <div class=\"container1\">
                            <div class=\"jumbotron jumbotron-fluid\">
                                <div class=\"container2\">
                                    <div class=\"container\">
                                        <h1>Gestionnaire de mot de passe</h1><br>
                                        <div class=\"container-fluid\">
                                            ";
        // line 96
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "

                                                <div class=\"form-group\">
                                                    ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "mdpOld", array()), 'row');
        echo "
                                                </div>

                                                <div class=\"form-group\">
                                                    ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "newMdp", array()), 'row');
        echo "
                                                </div>

                                                <div class=\"form-group\">
                                                    ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "newMdpBis", array()), 'row');
        echo "
                                                </div>

                                                <br>

                                                <div id=\"divSave\">
                                                    <div class=\"row\">
                                                        <div class=\"col btn\">
                                                            ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "save", array()), 'row');
        echo "
                                                        </div>
                                                        <div class=\"col btn\">
                                                            ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cancel", array()), 'row');
        echo "
                                                        </div>
                                                    </div>
                                                </div>
                                            ";
        // line 122
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
    }

    // line 138
    public function block_footer($context, array $blocks = array())
    {
        // line 139
        echo "        ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
    ";
    }

    // line 142
    public function block_javascripts($context, array $blocks = array())
    {
        // line 143
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "profil/gestionMdp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 143,  293 => 142,  286 => 139,  283 => 138,  272 => 122,  265 => 118,  259 => 115,  248 => 107,  241 => 103,  234 => 99,  228 => 96,  220 => 90,  206 => 78,  204 => 77,  190 => 65,  187 => 64,  184 => 63,  170 => 48,  163 => 44,  151 => 35,  145 => 32,  139 => 29,  129 => 22,  121 => 16,  118 => 15,  107 => 129,  105 => 63,  98 => 58,  96 => 15,  91 => 12,  88 => 11,  81 => 9,  78 => 8,  72 => 5,  67 => 4,  64 => 3,  59 => 145,  57 => 142,  54 => 141,  52 => 138,  49 => 137,  46 => 11,  44 => 8,  41 => 7,  38 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profil/gestionMdp.html.twig", "/var/www/html/GsbFrais/app/Resources/views/profil/gestionMdp.html.twig");
    }
}
