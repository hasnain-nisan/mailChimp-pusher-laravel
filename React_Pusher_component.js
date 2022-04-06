import React, {Component} from 'react';
import {Link} from 'react-router-dom';
const Pusher = require('pusher-js');

class Pusherr extends Component{

    constructor() {
      super();
      this.state = {
        tasks:[],
        loading:true
  
      }
    }
      componentDidMount(){
        console.log("Mounted");
        Pusher.logToConsole=true;
  
        var PUSHER_APP_KEY = "73cb44cc8c970a1a5056"
        var pusher = new Pusher(PUSHER_APP_KEY, {
          cluster: 'mt1',
          forceTLS: true
        });
  
        const this2 = this ;
        var channel = pusher.subscribe('nisan-text') ;
        channel.bind('nisan', function (data) {
          const tasks = this2.state.tasks
          tasks.push(data.data)
          this2.setState({tasks:tasks});
        });
  
        // var loading = channel['pusher']['channels']['channels']['events']['pusher']['connection']['callbacks']['_callbacks'];
   
      }
  
      render() {
  
          var tasks = this.state.tasks.map((item) => {
                  
            return(
              <tr>{item.program_time}
              <td>{item.event}</td>    
              <td>{item.message}</td>
              <td>{item.actual_time}</td>
              <td>{item.display_message}</td>
              </tr>
            )
        });
        
  
        return (
  
          <div className='md-col-2' style={{margin:"30px"}}>
             <div className="card">
                
                <div className="card-header">
                    <h4>Event Viewer
                        <Link to={'/'} className="btn btn-primary btn-sm float-end">Monitor Mode</Link>
                            
                    </h4>
                    <div className="row">
                        <table className="table">                          
                            <thead>
                              <tr>
                                <th>Program Time</th>
                                <th>Event</th>
                                <th>Message</th>
                                <th>Actual Time</th>
                                <th>Display Message</th>
                              </tr>        
                            </thead>
                            <tbody>
                            {tasks}
                            </tbody>
                        </table>
                    </div> 
                </div>
              </div>
          </div>
        );
    }
  }

export default Pusherr