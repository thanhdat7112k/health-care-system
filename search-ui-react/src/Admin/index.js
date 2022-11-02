import React from "react"
import { Admin , Resource, ListGuesser} from "react-admin"
import restProvider from 'ra-data-simple-rest'
import jsonServerProvider from 'ra-data-json-server'
import PostList from "./PostList"

const dataProvider = jsonServerProvider('https://jsonplaceholder.typicode.com')
// function AdminApp() {
//     return <Admin dataProvider={restProvider("http://localhost:3000")}>
//         <Resource name='posts' list={PostList}/>
//     </Admin>
// }

// const AdminApp = () => <Admin dataProvider={dataProvider}/>
const AdminApp = () => (
    <Admin dataProvider={dataProvider}>
        <Resource name='users' list={ListGuesser}/>
    </Admin>
)

export default AdminApp