import Link from "next/link";
export default function Home() {
  return (
    <div className="bg-indigo-950 min-h-dvh flex flex-col gap-2 p-4 items-center justify-center">
      <h2 className="text-4xl">Hello Next JS</h2>
      <p className="text-justify">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum aperiam laudantium unde alias nemo exercitationem nihil dolorem, numquam vero ut dolores debitis ratione asperiores at, accusantium qui expedita laborum sit?
      </p>
      <Link href="signin" className="btn btn-outline">SignIn</Link>
    </div>
  );
  
}