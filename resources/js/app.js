import './bootstrap';

import.meta.glob([
        '../img/**',
    ]);

import('wowjs').then((module) => {
    const WOW = module.WOW;
    const wow = new WOW();
    wow.init();
    });
