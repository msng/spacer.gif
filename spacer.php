<?php

/**
 * Output transparent 1x1 GIF
 */
function spacer_gif() {
	header('Content-Type: image/gif');
	echo base64_decode('R0lGODlhAQABAPAAAAAAAP///yH5BAEHAAEALAAAAAABAAEAAAICTAEAOw==');
}

/**
 * Output transparent 1x1 PNG
 */
function spacer_png() {
	header('Content-Type: image/png');
	echo base64_decode('iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAALEgAACxIB0t1+/AAAABx0RVh0U29mdHdhcmUAQWRvYmUgRmlyZXdvcmtzIENTNXG14zYAAAANSURBVAiZY/j//z8DAAj8Av6Fzas0AAAAAElFTkSuQmCC');
}
