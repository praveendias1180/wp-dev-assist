import React, { Component } from 'react'
import './style.scss'

class App extends Component {
    render() {
        return (
            <div id="udssl">
                <div className="py-5 text-center container">
                    <div className="row py-lg-5">
                        <div className="col-lg-6 col-md-8 mx-auto">
                            <h1 className="fw-light">Sample WordPress Component</h1>
                            <p className="lead text-muted">
                                Something short and leading about the collection
                                below—its contents, the creator, etc. Make it
                                short and sweet, but not too short so folks
                                don’t simply skip over it entirely.
                            </p>
                            <p>
                                <a href="#" className="btn btn-primary m-2">
                                    Main call to action
                                </a>
                                <a href="#" className="btn btn-secondary m-2">
                                    Secondary action
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        )
    }
}

export default App
