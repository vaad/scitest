
old_name = ''
File.open("duty.txt").each do |record|
  record.chomp!
	row = record.split("|")
	id = row[0]
	name = row[1];
	puts("delete from taxonomy_term_data where vid = #{id}; --  #{name}") if old_name == name
	old_name = name
end

