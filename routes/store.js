const express = require('express');
const router = express.Router();

// Get feature page
router.get('/', function(req, res) {
    res.render('store', {
        title: 'Rootcase - store',
        name: 'Rootcase - store'
    });
});

module.exports = router;