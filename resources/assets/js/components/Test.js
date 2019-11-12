import React, { Component } from 'react';
import NavForm from './test/NavForm.js';
import NoteForm from './test/NoteForm.js';
import NoteList from './test/NoteList.js';

class Test extends Component {
    render() {
        return (
            <div id="root">
                <NavForm/>
                <div className="container">
                    <div className="row">
                        <NoteList/>
                        <NoteForm/>
                    </div>
                </div>
            </div>
        );
    }
}

export default Test;