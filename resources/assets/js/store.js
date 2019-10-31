var redux = require('redux');
var store = redux.createStore(allReducer);

const noteInitialState = {
    testConnect: "Test"
}
const allReducer = (state = noteInitialState, action) => {
    switch (action.type) {
        case "ADD_DATA":
        console.log("connected");
            return state
        default:
            return state
    }
}

export default store;