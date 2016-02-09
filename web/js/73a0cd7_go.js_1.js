/**
 * @fileoverview Compiled template for file
 *
 * 
 *
 * @suppress {checkTypes|fileoverviewTags}
 */

goog.provide('go.js');

goog.require('twig');
goog.require('twig.filter');

/**
 * @constructor
 * @param {twig.Environment} env
 * @extends {twig.Template}
 */
go.js = function(env) {
    twig.Template.call(this, env);
};
twig.inherits(go.js, twig.Template);

/**
 * @inheritDoc
 */
go.js.prototype.getParent_ = function(context) {
    return false;
};

/**
 * @inheritDoc
 */
go.js.prototype.render_ = function(sb, context, blocks) {
    blocks = typeof(blocks) == "undefined" ? {} : blocks;
    // line 1
    sb.append("test\n123\n");
};

/**
 * @inheritDoc
 */
go.js.prototype.getTemplateName = function() {
    return "go.js";
};

/**
 * Returns whether this template can be used as trait.
 *
 * @return {boolean}
 */
go.js.prototype.isTraitable = function() {
    return true;
};
/* test*/
/* 123*/
/* */
