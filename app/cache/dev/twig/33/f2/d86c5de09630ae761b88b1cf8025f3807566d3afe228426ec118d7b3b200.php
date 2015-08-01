<?php

/* UniversalBundle:Default:ajout.html.twig */
class __TwigTemplate_33f2d86c5de09630ae761b88b1cf8025f3807566d3afe228426ec118d7b3b200 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 4
            echo "    <section>
        <ul>

            <li>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "civilite"), "html", null, true);
            echo "</li>
            <li>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom"), "html", null, true);
            echo "</li>
            <li>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom"), "html", null, true);
            echo "</li>
            <li>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "login"), "html", null, true);
            echo "</li>
            <li>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "motPasse"), "html", null, true);
            echo "</li>
            <li>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "adresse"), "html", null, true);
            echo "</li>
            <li>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "codePostal"), "html", null, true);
            echo "</li>
            <li>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "ville"), "html", null, true);
            echo "</li>
            <li>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "dateEmbauche"), "html", null, true);
            echo "</li>
            <li>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "dateCreation"), "html", null, true);
            echo "</li>
            <li>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "dateExpiration"), "html", null, true);
            echo "</li>
            <li>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "etat"), "html", null, true);
            echo "</li>
            <li>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "statut"), "html", null, true);
            echo "</li>
        </ul>
    </section>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "UniversalBundle:Default:ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 19,  75 => 18,  71 => 17,  67 => 16,  63 => 15,  59 => 14,  55 => 13,  51 => 12,  47 => 11,  43 => 10,  39 => 9,  35 => 8,  31 => 7,  26 => 4,  22 => 3,  19 => 2,);
    }
}
