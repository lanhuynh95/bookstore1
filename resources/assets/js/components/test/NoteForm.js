import React, { Component } from 'react';

class NoteForm extends Component {
    render() {
        return (
            <div className="col-4">
                <div className="form-group">
                    <label htmlFor="title">Edit Title</label>
                    <input type="text" name="title" id="title" className="form-control" placeholder="Please Enter" aria-describedby="helpIdEditTitle" />
                    <small id="helpIdEditTitle" className="text-muted">Edit Title</small>
                </div>
                <div className="form-group">
                    <label htmlFor="content">Content</label>
                    <textarea className="form-control" name="content" id="content" rows={3} defaultValue={""} />
                    <button type="submit" className="btn btn-primary btn-block">Save</button>
                </div>  
            </div>
        );
    }
}

export default NoteForm;