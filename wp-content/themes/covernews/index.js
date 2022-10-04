import React from 'react';
import ReactDOM from 'react-dom';
import Settings from './admin-dashboard/src/components/main'

document.addEventListener('DOMContentLoaded', () => {

    var root_id = "af-theme-dashboard"
    if ('undefined' !== typeof document.getElementById(root_id) && null !== document.getElementById(root_id)) {
        ReactDOM.render(<Settings />, document.getElementById(root_id));
    }
});
