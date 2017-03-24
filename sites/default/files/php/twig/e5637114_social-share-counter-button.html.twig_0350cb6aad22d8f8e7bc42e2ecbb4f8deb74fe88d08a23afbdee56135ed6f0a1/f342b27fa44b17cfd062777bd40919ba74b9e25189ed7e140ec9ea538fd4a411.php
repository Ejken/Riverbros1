<?php

/* modules/contrib/social_share_counter/templates/social-share-counter-button.html.twig */
class __TwigTemplate_885c7e885efb1bf6a149e2fd03ff70fe7433265fb9a825108fc7b1369f797c8e extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 13
        echo "<aside class=\"ssc-container\">
    <div class=\"sharebox\" data-url=\"";
        // line 14
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["social_share_counter_data"]) ? $context["social_share_counter_data"] : null), "link_url", array()), "html", null, true));
        echo "\" data-text=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["social_share_counter_data"]) ? $context["social_share_counter_data"] : null), "title", array()), "html", null, true));
        echo "\">
      <div class=\"count\">
        <div class=\"counts\">";
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["social_share_counter_data"]) ? $context["social_share_counter_data"] : null), "ssc_min_to_show", array()), "html", null, true));
        echo "</div>
        <span class=\"sharetext\">";
        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["social_share_counter_data"]) ? $context["social_share_counter_data"] : null), "count_text", array()), "html", null, true));
        echo "</span>
      </div>
      <div class=\"share-button-wrapper\">
      <a href=\"javascript:;\" class=\"csbuttons\" data-type=\"facebook\" data-count=\"true\">
        <span class=\"fa-facebook-square\">
          <span\tclass=\"expanded-text\">";
        // line 22
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["social_share_counter_data"]) ? $context["social_share_counter_data"] : null), "button_text", array()), "facebook", array()), "html", null, true));
        echo "</span>
          <span\tclass=\"alt-text-facebook\">Share</span>
        </span>
      </a>
      <a href=\"javascript:;\" class=\"csbuttons\" data-type=\"twitter\" data-txt=\"";
        // line 26
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["social_share_counter_data"]) ? $context["social_share_counter_data"] : null), "title", array()), "html", null, true));
        echo "\" data-via=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["social_share_counter_data"]) ? $context["social_share_counter_data"] : null), "via", array()), "html", null, true));
        echo "\" data-count=\"true\">
        <span class=\"fa-twitter\">
          <span class=\"expanded-text-twitter\">";
        // line 28
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["social_share_counter_data"]) ? $context["social_share_counter_data"] : null), "button_text", array()), "twitter", array()), "html", null, true));
        echo "</span>
          <span\tclass=\"alt-text-tweet\">Tweet</span>
        </span>
      </a>
      <div class=\"secondary\">
        <a href=\"javascript:;\" class=\"csbuttons\" data-type=\"google\" data-count=\"true\">
          <span class=\"fa-google-plus \"></span>
        </a>
        <a href=\"javascript:;\" class=\"csbuttons\" data-type=\"linkedin\" data-txt=\"";
        // line 36
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["social_share_counter_data"]) ? $context["social_share_counter_data"] : null), "title", array()), "html", null, true));
        echo "\" data-count=\"true\">
          <span class=\"fa-linkedin-square \"></span>
        </a>
        <a href=\"javascript:;\" class=\"csbuttons\" data-type=\"stumbleupon\" data-txt=\"";
        // line 39
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["social_share_counter_data"]) ? $context["social_share_counter_data"] : null), "title", array()), "html", null, true));
        echo "\" data-count=\"true\">
          <span class=\"fa-stumbleupon \"></span>
        </a>
        <a href=\"javascript:;\" class=\"csbuttons\" data-type=\"pinterest\" data-txt=\"";
        // line 42
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["social_share_counter_data"]) ? $context["social_share_counter_data"] : null), "title", array()), "html", null, true));
        echo "\" data-count=\"true\">
          <span class=\"fa-pinterest \"></span>
        </a>
        <a class=\"switch2\" href=\"javascript:;\"></a>
      </div>
      <a class=\"switch\" href=\"javascript:;\"></a>
      </div>
    </div>
</aside>";
    }

    public function getTemplateName()
    {
        return "modules/contrib/social_share_counter/templates/social-share-counter-button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 42,  96 => 39,  90 => 36,  79 => 28,  72 => 26,  65 => 22,  57 => 17,  53 => 16,  46 => 14,  43 => 13,);
    }
}
/* {#*/
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to standard Social Share Counter buttons.*/
/*  **/
/*  * Available variables:*/
/*  * - social_share_counter_data: Array contains configured values.*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <aside class="ssc-container">*/
/*     <div class="sharebox" data-url="{{social_share_counter_data.link_url}}" data-text="{{social_share_counter_data.title}}">*/
/*       <div class="count">*/
/*         <div class="counts">{{social_share_counter_data.ssc_min_to_show}}</div>*/
/*         <span class="sharetext">{{social_share_counter_data.count_text}}</span>*/
/*       </div>*/
/*       <div class="share-button-wrapper">*/
/*       <a href="javascript:;" class="csbuttons" data-type="facebook" data-count="true">*/
/*         <span class="fa-facebook-square">*/
/*           <span	class="expanded-text">{{social_share_counter_data.button_text.facebook}}</span>*/
/*           <span	class="alt-text-facebook">Share</span>*/
/*         </span>*/
/*       </a>*/
/*       <a href="javascript:;" class="csbuttons" data-type="twitter" data-txt="{{social_share_counter_data.title}}" data-via="{{social_share_counter_data.via}}" data-count="true">*/
/*         <span class="fa-twitter">*/
/*           <span class="expanded-text-twitter">{{social_share_counter_data.button_text.twitter}}</span>*/
/*           <span	class="alt-text-tweet">Tweet</span>*/
/*         </span>*/
/*       </a>*/
/*       <div class="secondary">*/
/*         <a href="javascript:;" class="csbuttons" data-type="google" data-count="true">*/
/*           <span class="fa-google-plus "></span>*/
/*         </a>*/
/*         <a href="javascript:;" class="csbuttons" data-type="linkedin" data-txt="{{social_share_counter_data.title}}" data-count="true">*/
/*           <span class="fa-linkedin-square "></span>*/
/*         </a>*/
/*         <a href="javascript:;" class="csbuttons" data-type="stumbleupon" data-txt="{{social_share_counter_data.title}}" data-count="true">*/
/*           <span class="fa-stumbleupon "></span>*/
/*         </a>*/
/*         <a href="javascript:;" class="csbuttons" data-type="pinterest" data-txt="{{social_share_counter_data.title}}" data-count="true">*/
/*           <span class="fa-pinterest "></span>*/
/*         </a>*/
/*         <a class="switch2" href="javascript:;"></a>*/
/*       </div>*/
/*       <a class="switch" href="javascript:;"></a>*/
/*       </div>*/
/*     </div>*/
/* </aside>*/
