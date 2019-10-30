var redux = required('redux');

const noteInitialState = {testconnect:'test'}
const allReducer = (state = noteInitialState, action) => {
    switch (action.type) {
        case "Add_DATA":
            console.log('connected');
            return state
        default:
            return state
    }
}
var store = redux.createStore(allReducer);

export default store;