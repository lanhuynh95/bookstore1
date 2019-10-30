import React, { Component } from 'react';

class NoteList extends Component {
    render() {
        return (
            <div className="col">
                <div id="noteList" role="tablist" aria-multiselectable="true">
                    <div className="card">
                    <div className="card-header" role="tab" id="Note1">
                        <h5 className="mb-0">
                        <a data-toggle="collapse" data-parent="#noteList" href="#NoteContent1" aria-expanded="true" aria-controls="NoteContent1">
                            Ghi chu 1
                        </a>
                        </h5>
                    </div>
                    <div id="NoteContent1" className="collapse in" role="tabpanel" aria-labelledby="Note1">
                        <div className="card-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil tempore hic, ullam est minus possimus perferendis, libero cupiditate exercitationem, ea dignissimos recusandae eum assumenda neque ut! Facere explicabo perferendis mollitia?
                        </div>
                    </div>
                    </div>
                    <div className="card">
                    <div className="card-header" role="tab" id="Note1">
                        <h5 className="mb-0">
                        <a data-toggle="collapse" data-parent="#noteList" href="#NoteContent2" aria-expanded="true" aria-controls="NoteContent2">
                            Ghi chu 2
                        </a>
                        </h5>
                    </div>
                    <div id="NoteContent2" className="collapse in" role="tabpanel" aria-labelledby="Note2">
                        <div className="card-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil tempore hic, ullam est minus possimus perferendis, libero cupiditate exercitationem, ea dignissimos recusandae eum assumenda neque ut! Facere explicabo perferendis mollitia?2
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default NoteList;