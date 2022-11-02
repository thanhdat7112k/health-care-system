import React from "react"
import { List, Datagrid, TextField, EditButton, DeleteButtons } from "react-admin"

const PostList = (props) => {
    return (
        <List {...props}>
            <Datagrid>
                <TextField source="id" />
                <TextField source="Hiện tượng" />
                <TextField source="Mức độ phù hợp" />
                <TextField source="Vấn đề" />
                <EditButton basePath='/posts'/>
                <DeleteButton basePath='/posts'/>
            </Datagrid>
        </List>
    )
}

export default PostList