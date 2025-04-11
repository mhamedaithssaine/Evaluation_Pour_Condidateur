import { useEffect, useState } from "react";
import api from "../api/api";
import { Link } from "react-router-dom";

export default function Courses() {
  const [courses, setCourses] = useState([]);

  useEffect(() => {
    api.get("/courses").then((res) => setCourses(res.data));
  }, []);

  return (
    <div>
      <h2>Courses</h2>
      {courses.map((course) => (
        <div key={course.id}>
          <Link to={`/courses/${course.id}`}>
          <div>
          <h3>{course.title}</h3>
          <p>{course.description}</p>
          </div>
         

          
          </Link>
        </div>
      ))}
    </div>
  );
}
